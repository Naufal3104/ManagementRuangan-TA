  <!-- Navbar -->
  <main class="main-content position-relative border-radius-lg "> 
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-5 px-3">
      <nav aria-label="breadcrumb">
        <h3 class="font-weight-bolder text-white mb-0">@yield('content-title')</h3>
      </nav>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <form action="logout" method="POST">
              @csrf
            <a href="#" data-toggle="modal" data-target="#logoutModal" class="nav-link text-white font-weight-bold px-0">
              <input class="btn btn-danger" type="submit" value="Logout">
            </a>
            </form>
          </li>
          <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->