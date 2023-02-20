<div class="min-height-200 bg-primary position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand" style="margin-left: -20px" href=" https://smkn1-sby.sch.id/ " target="_blank">
      <img src="/img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-3 font-weight-bold" style="font-size: 12.5px">EzInRoom</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link @if(Request::is('/')) active @endif" href="/">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span> 
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link @if(Request::is('order','full-calender','user/register','full-calender/list','guest','guest/create')) active @endif" href="/order">
          <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
            <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
          </div>
          <span class="nav-link-text ms-1">Order</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
