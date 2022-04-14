@extends('layouts.main')

@section('tampilan')
<!-- Layout Pertama Start-->

<div class="container-fluid text-dark mt-4">            
    <div class="row justify-content-center"> 
        @foreach ($data as $item)
        <div class="card m-3 border-danger" style="max-width: 540px;">            
            <div class="row g-0">                 
                <div class="col-md-4">                
                <img src="{{ asset('storage/'.$item['paket_gambar'])}}" class="img-fluid" alt="..." style="height : 100% ">
                </div>                
                <div class="col-md-8">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $item['judulkartu'] }}</b></h4>
                        <h class="card-text">Starting (/person):</h>
                        <h5 class="card-text text-danger"><b>IDR {{ $item['harga'] }}</b></h5>                        
                        <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                            <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                            <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                          </svg><small class="text-muted"><b> {{ $item['tempat']}} - Indonesia</b></small></p>
                    </div>
                </div>               
            </div>
        </div>
        @endforeach          
    </div> 
     
</div>

<!-- Layout Pertama End -->
@endsection