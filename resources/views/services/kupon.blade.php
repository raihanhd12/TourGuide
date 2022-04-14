@extends('layouts.main')

@section('tampilan')
<!-- Layout Pertama Start-->
<div class="accordion " id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header " id="headingOne">
            <button class="accordion-button  bg-dark"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style= "color: #45e002">
                <b>Kupon Yang Tersedia Minggu Ini</b>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                
                <div class="row justify-content-center">
                    @foreach ($data as $item)
                    <div class="card bg-dark text-light me-5 mt-5" style="width: 18rem;">
                        <img src="../assets/diskon.jpg" class="card-img-top mt-2" alt="...">
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
                </div> 
                  
            </div>
        </div>
    </div>
</div>
<!-- Layout Pertama End -->
@endsection