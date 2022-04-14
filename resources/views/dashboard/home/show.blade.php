@extends('dashboard.layouts.main')

@section('container')
<h1 class="h2  mt-4 mb-4 text-center"><u>CAROUSEL</u></h1>
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="table-responsive">            
        <!-- Start-->    
          <!-- Gambar Carousel Start-->   
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
              </div>
              <div class="carousel-inner no-padding">
                @foreach ($post as $item)
                <div class="carousel-item active" >
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
          <!-- End-->            
    </div>
</div>
@endsection