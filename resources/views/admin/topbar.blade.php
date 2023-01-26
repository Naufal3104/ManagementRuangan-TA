  <!-- Navbar -->
  <main class="main-content position-relative border-radius-lg "> 
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-5 px-3">
      <nav aria-label="breadcrumb">
        <h3 class="font-weight-bolder text-white mb-0">@yield('content-title')</h3>
      </nav>
      <div class="position-absolute top-55 start-90 translate-middle">
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <ul class="navbar-nav ml-auto">
              <!-- Sidebar Toggle (Topbar) -->
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle">
                <i class="fa fa-bars"></i>
              </button>
            <!-- Nav Item - User Information -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle btn btn-light w-120" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-sm-inline d-none">Hi, {{auth()->user()->name}}</span>
              </a>
            <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw text-gray-400"></i>
                        Logout
                    </a>
                </div>
              </li>
            </ul>
          <li class="ml-5 nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
              </div>
            </a>
          </li>
          </li>
        </ul>
      </div>
        </div>
      </div>
    </nav>
  <!-- End Navbar -->


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
              <button class="btn btn-danger " type="button" data-dismiss="modal">Batal</button>
              <form action="logout" method="POST">
                @csrf
                <input class="btn btn-success" type="submit" value="Logout">
              </a>
              </form>
          </div>
      </div>
  </div>
  </div>
  

