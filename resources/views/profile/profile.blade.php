@extends('layouts.main')

<style>
  @media(max-width : 768px){
}
</style>

@section('tampilan')

<!-- background image Start
<div 
    class="masthead"
    style="background-image: url(../assets/carousel1.jpg)"
>
    <div class="color-overlay d-flex justify-content-center align-items-center">
        <h1>Test</h1>
    </div>
</div>
 Background Image End -->
 
 <!-- Visi Misi Start-->
<div id="visimisi"class="container-fluid text-center text-light" style="background-color: rgba(255, 0, 0, 0.562)">
   <h1 style= "color: rgb(255, 255, 255)">VISI & MISI</h1>   
  </div>
  <div class="row g-0">
    <div class="col-md-12">
  <div class="card mb-3">
    <img src="../assets/vision.jpg" class="card-img-top" alt="..." style= "width: 150" height="150">
    <div class="card-body">
      <h2 class="card-title">VISI</h2>
      <h5 class="card-text mt-4">→ Menjadi penyedia jasa tour dan travel paling menarik di Indonesia, yang memberikan pengalaman tak terlupakan kepada pelanggan, praktisi bisnis, dan mitra kami.</h5>      
    </div>
  </div>
  </div>
  <div class="col-md-12">
  <div class="card">
    <div class="card-body">
      <h2 class="card-title">MISI</h2>
      <h5 class="card-text">→ Menghadirkan kegiatan operasional dan layanan yang terencana, tepat sasaran, serta pengalaman wisata yang tak ternilai dengan implementasi praktis industri terbaik.</h5> 
      <h5 class="card-text">→ Membantu praktisi bisnis kami dalam membuka dan memperluas pandangan global terhadap dunia dengan membantu mengembangkan potensi secara profesional maupun personal.</h5>     
      <h5 class="card-text">→ Memberikan timbal balik investasi terbaik kepada pemegang saham dan mitra bisnis.</h5>          
    </div>
    <img src="../assets/mision.jpg" class="card-img-bottom" alt="..."  style="width: 150" height="150">
  </div>
  </div>
</div>

<!-- Visi Misi End-->


<!-- Core Value Start-->
<div id="core" class="container-fluid text-center text-light" style="background-color: rgba(255, 255, 0, 0.562)">
    <h1 class="mt-2" style="color: rgb(255, 255, 255)">CORE VALUES</h1>   
</div>
   <div class="card mb-3 bg-dark text-light">
    <div class="row g-0">
      <div class="col-md-6 offset-md-3">
        <img src="../assets/core.jpg" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-12">
        <div class="card-body text-center">                  
          <h5 class="card-text">→ Amanah / Trustworthy – Has a definition of “hold true to the given trust”</h5><br> 
          <h5 class="card-text">→ Kompeten / Competent – Has a definition of “continue to learn and develop capabilities”</h5><br>  
          <h5 class="card-text">→ Harmonis / Harmonious - Has a definition of “caring for each other and respecting differences”</h5><br>  
          <h5 class="card-text">→ Loyal – Has a definition of “dedicated and prioritizing the interests of the nation and state”</h5><br>  
          <h5 class="card-text">→ Adaptif / Adaptive – Has a definition of “continuing to innovate and be enthusiastic in driving or facing changes”</h5><br>  
          <h5 class="card-text">→ Kolaboratif / Collaborative – Has a definition of “encouraging synergistic cooperation”</h5> 
        </div>
      </div>
    </div>
  </div>
 </div>

 <!-- Core Value End-->

<!-- Gallery Start-->
 <div id="gallery" class="container-fluid text-center text-light" style="background-color: rgba(11, 255, 11, 0.562)">
    <h1 class="mt-2">GALLERY</h1>   
</div>
  <!-- Card Start-->
  <div class="row g-0 justify-content-center">
    @foreach ($data as $item)
      <div class="col-md-3">
      <div class="card mt-4 mb-4 ms-4" style="width: 20rem; ">
        <img class="card-img-top" src="{{ asset('storage/'.$item['gambar'])}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="text-center"><b> {{ $item['nama'] }}<br>({{ $item['lokasi'] }})</b></h5>
          <p class="card-text text-justify">{{ $item['deskripsi'] }}</p>
        </div>
      </div>
    </div>
    @endforeach
    <!-- Card End-->
</div>
<!-- Gallery END-->
@endsection