<nav class="navbar navbar-expand-lg navbar-dark bg-black text-light sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" style="color : #4bfa00" href="/">RHD TourGuide</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          @auth
          <li class="nav-item">
            <a class="nav-link {{ ($item['title']  == "Home") ? 'active' : '' }} " aria-current="page" href="/home">Home</a>
          </li>              
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($item['title']  == "Profile") ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item   " href="/profile/profile#visimisi">Visi & Misi</a></li>
              <li><a class="dropdown-item " href="/profile/profile#core">Core Value</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item " href="/profile/profile#gallery">Gallery</a></li>
            </ul>
          </li>                       
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle {{ ($item['title']  == "Paket") ? 'active' : '' }} nav-link dropdown-toggle {{ ($item['title']  == "Kupon") ? 'active' : '' }} " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item {{ ($item['title']  == "Paket") ? 'active' : '' }} " href="/services/paket">Paket</a></li>
              <li><a class="dropdown-item {{ ($item['title']  == "Kupon") ? 'active' : '' }} " href="/services/kupon">Kupon</a></li>             
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($item['title']  == "Contact") ? 'active' : '' }}" href="/contact">Contact</a>
          </li>          
          <li class="nav-item">
            <a class="nav-link {{ ($item['title']  == "About") ? 'active' : '' }}" href="/about">About me</a>
          </li>
        </ul>
        <ul>
        <ul class="nav-item dropdown text-black">
          <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown " role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #4bfa00">         Halo, {{ auth()->user()->username }} 
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
            <li><hr class="dropdown-divider "></li>
            <li>
              <form action="/login/logout" method="POST">
                @csrf
                <button type="submit" class="dropdown-item" >
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                </svg> Logout
                </button>
              </form>
              
          </li>
          </ul>
        </ul>
        </ul>
      @else           
      </div>            
          <form class="d-flex">
          <button class="btn btn-outline-success " type="submit" ><a class="nav-link {{ ($item['title']  == "Login") ? 'active' : '' }}" style="color: #4bfa00" href="/login/login">Login</a></button>
        </form>
        @endauth
    </div>
  </nav>