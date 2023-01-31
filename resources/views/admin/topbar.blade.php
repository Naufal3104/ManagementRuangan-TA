  <!-- Navbar -->
  <main class="main-content position-relative border-radius-lg "> 
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-5 px-3">
      <nav aria-label="breadcrumb">
        <h3 class="font-weight-bolder text-white mb-0">@yield('content-title')</h3>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="#" class="nav-link text-white font-weight-bold px-0" data-toggle="modal" data-target="#logoutModal">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none">Logout</span>
          </a>
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
  

