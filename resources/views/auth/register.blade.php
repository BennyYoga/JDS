<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register - Page</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('assets/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" action="{{route('auth.create')}}" method="post">
                @csrf
                <div class="form-group">
                  <input type="text" class="form-control @error('name') is-invalid @enderror form-control-lg" id="fullname" name="nama" placeholder="Fullname" value="{{ old('name') }}">
                  @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                  <input type="email" class="form-control  @error('email') @enderror form-control-lg" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                  @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control @error('password') @enderror form-control-lg" id="password" name="password" placeholder="Password">
                  @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                  <input type="password" class="form-control  @error('password') @enderror form-control-lg" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
                  @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Register As</label>
                  <div class="col-sm-4">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="role" id="membershipRadios1" value="2">
                        Recruiter
                        <i class="input-helper"></i><i class="input-helper"></i></label>
                    </div>
                  </div>
                  <div class="col-sm-5">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="role" id="membershipRadios2" value="3">
                        Job Seeker
                        <i class="input-helper"></i><i class="input-helper"></i></label>
                    </div>
                  </div>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button id="btn-register" type="submit" class ="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">REGISTER</button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="{{route('auth.login')}}" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  @include('sweetalert::Alert')

  <!-- plugins:js -->
  <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('assets/js/template.js') }}"></script>
  <script src="{{ asset('assets/js/settings.js') }}"></script>
  <script src="{{ asset('assets/js/todolist.js') }}"></script>

  <!-- endinject -->
</body>

</html>