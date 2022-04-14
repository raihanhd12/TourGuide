@extends('layouts.main')

@section('tampilan')

<!-- Layout Pertama Start-->     
<div class="container-fluid text-light" style="height: 100%">  
        <!-- Gambar Carousel Start-->   
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner no-padding">
              <div class="carousel-item active" >
                <img src="../assets/carousel1.jpg" class="d-block w-100" alt="..." style=" height: 500px" >
                <div class="carousel-caption ">
                  <h1 style="color:rgb(235, 253, 235)"><b>🏡Selamat Datang di RHD TourGuide🏡</b></h1>
                </div>
              </div>
              @foreach ($data as $item)
              <div class="carousel-item" >
                <img src="{{ asset('storage/'.$item['gambar'])}}" class="d-block w-100" alt="..." style="height: 500px">
                <div class="carousel-caption">
                  <h5><b>{{ $item['nama'] }}</b></h5>
                  <p>{{ $item['deskripsi'] }}</p>
                </div>
              </div>
              @endforeach
            </div>            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <!-- Gambar Carousel End-->
         
        <!-- Penjelasan Singkat Start -->
        <div class="row text-center align-items-center mt-4">
        <div class="col-12">
            <img src="../assets/profile-pic1.png" alt="my image" style="width: 150" height="150">
            <h2 class="mt-2">😁RHD Tour Services😁</h2>
            <i>Vision | <span style="color: #66c83d">Explore</span> | Discover</i>
            <p class="mt-4">Tour Guide adalah orang yang bertugas mendampingi, memberi Info dan membantu turis mencukupi kebutuhannya sepanjang berada di sebuah kawasan wisata.<br> Baik itu turis domestik yang berasal dari negara sendiri maupun turis luar negeri. </p>
        </div>              
        </div>  
        <!-- Penjelasan Singkat End -->
        
        <!-- Card start -->
        <div class="row text-dark mt-4 mb-4">
            <div class="col-sm-4 g-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center">Tour Bersama RHD</h5>
                  <p class="card-text">Halo, kami siap dan bersedia mengajak kamu ke tempat yang menakjubkan di indonesia</p>
                  <a href="/contact" class="btn btn-dark d-block">Hubungi Sekarang</a>
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark text-dark">
                    📞
                  </span>
                </div>
              </div>
            </div>
            <div class="col-sm-4 g-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title text-center">Paket Tour</h5>
                  <p class="card-text">Tersedia berbagai macam - macam paket tour pilihan terbaik untuk explore indonesia</p>
                  <a href="/services/paket" class="btn btn-dark d-block">Lihat Paket</a>
                </div>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-dark text-dark">
                    💵
                  </span>
              </div>
            </div>
            <div class="col-sm-4 g-4">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title text-center">Kupon </h5>
                    <p class="card-text">Dapatkan kupon menarik untuk harga spesial bahkan dapat keliling indonesia secara gratis</p>
                    <a href="/services/kupon" class="btn btn-dark d-block">Lihat Kupon</a>
                  </div>                  
                </div>                
              </div>
          </div>
          <!-- Card End -->
</div>
<!-- Layout Pertama End -->

@endsection