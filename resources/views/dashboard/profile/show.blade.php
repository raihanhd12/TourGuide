@extends('dashboard.layouts.main')

@section('container')
<h1 class="h2  mt-4 mb-4 text-center"><u>CARD</u></h1>
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
        <div class="table-responsive">            
              <!-- Card Start-->              
                @foreach ($post as $item)
                  <div class="col">
                  <div class="card " style="width: 20rem; ">
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
    </div>
@endsection