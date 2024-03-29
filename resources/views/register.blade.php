

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
    Register
  </title>
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
    <div class="page-header align-items-start min-vh-25 pt-6 pb-11 m-2 border-radius-lg">
    </div>
    <span class="mask bg-gradient-dark"></span>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10  justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto ">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Register</h5>
            </div>
            <div class="card-body">
            <form class="user" action='/register/create' method = "POST" enctype  = "multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="name" autocomplete="off" class="form-control form-control-user" id="name" name="name" value="{{old('name')}}" placeholder="Username">
                </div>
                <div class="mb-3">
                  <input type="email" autocomplete="off" class="form-control form-control-user" id="email" name="email" value="{{old('email')}}" placeholder="Email">
                </div>
                <div class="mb-3">
                  <input type="tel" autocomplete="off" class="form-control form-control-user" id="telp" name="telp" value="{{old('telp')}}" placeholder="Nomor telepon">
                </div>
                <div class="mb-3">
                    <input type="password" autocomplete="off" class="form-control form-control-user" id="password" name="password" value="{{old('password')}}" placeholder="Password">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 mt-4">Register</button>
                  <a href="/" class="btn bg-gradient-danger w-100">Cancel</a>
                </div>
              </form>
              <a href="/login" class="text-center">Sudah punya akun?</a>
                @if (count($errors) > 0)
                  <div class = "text-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>
                 @endif
                 @if (\Session::has('success'))
                    <div class="alert alert-success">
                      <ul>
                        <ol>{!!\Session::get('success')!!}<button type="button" class="btn-close position-absolute end-1" data-bs-dismiss="alert" aria-label="Close"></button></ol>
                      </ul>
                    </div>
                 @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>
@include('script')


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