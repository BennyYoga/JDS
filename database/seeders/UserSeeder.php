<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::transaction(function () {
            try {
                User::create([
                    'email'              => 'admin@admin.com',
                    'username'              => 'admin@admin.com',
                    'nama'          => 'admin',
                    'password'             => Hash::make('123'),
                    'role' => '1',
                ]);
                User::create([
                    'email'              => 'HRD@HRD.com',
                    'username'              => 'HRD@HRD.com',
                    'nama'          => 'HRD',
                    'password'             => Hash::make('123'),
                    'role' => '2',
                ]);
                User::create([
                    'email'              => 'user@user.com',
                    'username'              => 'user@user.com',
                    'nama'          => 'user',
                    'password'             => Hash::make('123'),
                    'role' => '3',
                ]);
            } catch (\Throwable $e) {
                throw $e;
            }
        });
    }
}
