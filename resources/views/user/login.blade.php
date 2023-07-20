<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              {{-- <div class="brand-logo">
                <img src="../../images/logo.svg" alt="logo">
              </div> --}}
              @if(session()->has('error'))
              <p class="text-danger">{{session('error')}}</p>
              @endif
              <center>
                <h3 class="login-title text-center">Login to klassy</h3>
              <br>
                <p class="login-button-info-text login-info-text text-center">EASILY USING</p>
              <form action="{{ route('login.action') }}" method="POST">
                @csrf
                <a href="/auth/google"><img src="https://cdn.freebiesupply.com/logos/large/2x/google-icon-logo-png-transparent.png" width="40" height="40"></a>
                </center>
                <br>
                <p class="login-info-text text-center">- OR USING EMAIL -</p>
                <div class="mb-3">
                  {{-- <br> --}}
                    <label>Email <span class="text-danger">*</span></label>
                    <input class="form-control" type="email" name="email"/>
                </div>
                <div class="mb-3">
                    <label>Password <span class="text-danger">*</span></label>
                    <input class="form-control" type="password" name="password"/>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Login</button>
                    {{-- <a class="btn btn-danger" href="{{ route('home') }}">Back</a> --}}
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href={{ route('register') }}>Create</a>
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
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>