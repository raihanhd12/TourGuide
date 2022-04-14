@extends('dashboard.layouts.main')

@section('container')
<h1 class="h2  mt-4 mb-4 text-center"><u>KUPON</u></h1>
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
        <div class="table-responsive">            
              <!-- Card Start-->              
              @foreach ($post as $item)
              <div class="card bg-dark text-light me-5 mt-5" style="width: 18rem;">
                  <img src="../../assets/diskon.jpg" class="card-img-top mt-2" alt="...">
                  <div class="card-body">
                  <h5 class="card-title text-warning">Diskon {{$item['nilai']}}%</h5>
                  <p class="card-text"> Dapat di redeem mulai <b>{{ $item['tanggalmulai'] }}</b> hingga <b>{{ $item['tanggalberakhir'] }}</b>.</p>                  
                      <div class="accordion-item text-dark">
                          <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed bg-warning" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                              <b>Lihat Kode</b>
                          </button>
                          </h2>
                              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body text-center">RHD-{{ $item['kode'] }}-SV</div>
                              </div>
                      </div>
                  </div>
              </div>
              @endforeach   
                <!-- Card End-->            
          </div>
    </div>
@endsection