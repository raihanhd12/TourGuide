<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="airplay" style="color: green"></span>
              MENU
            </a>
          </li>
          <li><hr class="dropdown-divider"></li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/home*') ? 'active' : '' }}" aria-current="page" href="/dashboard/home">
            <span data-feather="home" style="color: green"></span>
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/profile*') ? 'active' : '' }}" href="/dashboard/profile">
            <span data-feather="users" style="color: green"></span>
            Profile
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/servicesPaket*') ? 'active' : '' }}" href="/dashboard/servicesPaket">
            <span data-feather="file" style="color: green"></span>
            Services Paket
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/servicesKupon*') ? 'active' : '' }}" href="/dashboard/servicesKupon">
            <span data-feather="shopping-cart" style="color: green"></span>
            Services Kupon
          </a>
        </li>          
        <li class="nav-item ">
          <a class="nav-link {{ Request::is('dashboard/about*') ? 'active' : '' }}" href="/dashboard/about">
            <span data-feather="bar-chart-2" style="color: green"></span>
            About
          </a>
        </li> 
        <li class="nav-item ">
          <a class="nav-link {{ Request::is('dashboard/contact*') ? 'active' : '' }}" href="/dashboard/contact">
            <span data-feather="align-left" style="color: green"></span>
            Contact
          </a>
        </li>       
    </div>
  </nav>