<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('/assets/img/favicon.png')}}">
  <title>
    @yield('title')
  </title>
  @include('admin.css')
</head>
<body class="g-sidenav-show bg-gray-100">
@include('admin.sidebar')
@include('admin.topbar')
  @yield('content')
</main>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin ingin Logout?</h5>
        </div>
        <div class="modal-body">Klik Logout untuk lanjut</div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="/">Logout</a>
        </div>
    </div>
</div>
</div>
@include('admin.script')
</body>

</html>