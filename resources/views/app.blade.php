<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/logosmk.png">
  <link rel="icon" type="image/png" href="./assets/img/logosmk.png">
  <title>
    @yield('title')
  </title>
  @include('css')
</head>
<body class="g-sidenav-show bg-gray-100">
@include('sidebar')
@include('topbar')
  @yield('content')
@include('script')
</body>

</html>