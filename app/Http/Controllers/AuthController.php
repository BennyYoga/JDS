<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $messages = [
            'username.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
        ];
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], $messages);
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            Alert::success('Success', 'You have Successfully loggedin');
            return view('mainpage.dashboard.index');
        } else {
            Alert::error('Error', 'Oppes! You have entered invalid credentials');
            return redirect()->route('auth.index');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        Alert::success('Success', 'You have Successfully logout');
        return redirect()->route('auth.index');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function createUser(Request $request)
    {
        $messages = [
            'email.required' => 'Email must be filled',
            'nama.required' => 'Nama must be filled',
            'password.required' => 'Password must be filled',
        ];
        $request->validate([
            'email' => 'required',
            'nama' => 'required',
            'password' => 'required',
        ], $messages);
        if ($request->password != $request->confirm_password) {
            Alert::error('Error', 'Password and Confirm Password must be same');
            return redirect()->route('auth.register');
        }

        $user = [
            'email' => $request->email,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'username' => $request->email,
        ];

        $user = User::create($user);
        Alert::success('Success', 'You have Successfully registered, Please login to continue');
        return redirect()->route('auth.index');
    }
}
