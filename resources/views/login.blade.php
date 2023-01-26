

<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/logosmk.png">
  <title>
    Login
  </title>
  <!--     Fonts and icons     -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" /> --}}

  @include('css')
</head>

<body class="">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
    <div class="container">
      <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon mt-2">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </span>
      </button>
    </div>
  </nav>
  <!-- End Navbar -->
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-6 pb-11 m-2 border-radius-lg">
      <span class="mask"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-dark mb-2 mt-5">Selamat datang</h1>
          </div>
        </div>
      </div>
    </div>
    <span class="mask bg-gradient-light"></span>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Login</h5>
            </div>
            <div class="card-body">
            <form class="user" action='login' method="post">
                @csrf
                <div class="mb-3">
                    <input type="name" autocomplete="off" class="form-control form-control-user" id="name" name="name" placeholder="Username">
                </div>
                <div class="mb-3">
                    <input type="password" autocomplete="off" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-primary w-48 mt-4 text-light font-weight-bolder">Login</button>
                  <a href="/" class="btn bg-danger w-48 mt-4 text-light font-weight-bolder">Cancel</a>
                </div>
                @if (count($errors) > 0)
                  <div class = "text-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>
                 @endif
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
  <!--   Core JS Files   -->
  @include('script')
  {{-- <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script> --}}

</html>
{{-- <form class="user" action='login' method="post">
    @csrf
    <div class="form-group">
        <input type="name" class="form-control form-control-user"
            id="name" name="name"
            placeholder="Username">
    </div>
    <div class="form-group">
        <input type="password" class="form-control form-control-user"
            id="password" name="password" placeholder="Password">
    </div>
    <input type="submit" class="btn btn-primary btn-user btn-block">
    <a href="/" class="btn btn-danger btn-user btn-block">
        Cancel
    </a>
</form> --}}

  