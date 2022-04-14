@extends('layouts.main')

<link rel="stylesheet" href="../css/about.css">

@section('tampilan')
<!-- Layout Pertama Start-->
@foreach ($data as $item)
    <section class="section about-section gray-bg" id="about">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h3 class="dark-color">About Me</h3>
                        <h6 class="theme-color lead">{{ $item['pekerjaan'] }}</h6>
                        <p>Perkenalkan saya, <mark>{{ $item['nama'] }}</mark>. Biasa dipanggil {{ $item['namapanggilan ']}}, Saya tinggal di {{ $item['alamat'] }}.
                            {{ $item['pekerjaan'] }} yang antusias dan bermotivasi tinggi untuk mencapai cita - citanya.</p>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>TTL</label>
                                    <p>{{ $item['ttl'] }}</p>
                                </div>
                                <div class="media">
                                    <label>Umur</label>
                                    <p>{{ $item['umur'] }} Tahun</p>
                                </div>
                                <div class="media">
                                    <label>JK</label>
                                    <p>{{ $item['jk'] }}</p>
                                </div>
                                <div class="media">
                                    <label>Agama</label>
                                    <p>{{ $item['agama'] }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Hobi</label>
                                    <p>{{ $item['hobi'] }}</p>
                                </div>
                                <div class="media">
                                    <label>Cita - Cita</label>
                                    <p>{{ $item['citacita'] }}</p>
                                </div>
                                <div class="media">
                                    <label>NIM</label>
                                    <p>{{ $item['nim'] }}</p>
                                </div>
                                <div class="media">
                                    <label>Email</label>
                                    <p>{{ $item['email'] }}</p>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-avatar">
                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                    </div>
                </div>
            </div>
            <div class="counter mt-5">
                <div class="row">
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <a class="icon" href="https://www.instagram.com/raaihan.n/"><img src="https://liupurnomo.github.io/resume/icons/Instagram.png" alt="" width="40px"></a>    
                            <p class="m-0px font-w-600">Instagram</p>       
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <a class="icon" href="https://www.facebook.com/RaihanHidayatullahD"><img src="https://liupurnomo.github.io/resume/icons/Facebook.png" alt="" width="40px"></a>  
                            <p class="m-0px font-w-600">Facebook</p>      
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <a class="icon" href="https://steamcommunity.com/id/raihanhd"><img src="https://liupurnomo.github.io/resume/icons/Steam.png" alt="" width="40px"></a>  
                            <p class="m-0px font-w-600">Steam</p>                           
                        </div>
                    </div>
                    <div class="col-6 col-lg-3">
                        <div class="count-data text-center">
                            <a class="icon" href="https://wa.me/6281906781639"><img src="https://liupurnomo.github.io/resume/icons/WhatsApp.png" alt="" width="40px"></a> 
                            <p class="m-0px font-w-600">WhatsApp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    @endforeach 
<!-- Layout Pertama End -->

@endsection