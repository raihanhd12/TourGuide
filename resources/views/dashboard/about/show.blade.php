@extends('dashboard.layouts.main')

@section('container')
<h1 class="h2  mt-4 mb-4 text-center"><u>ABOUT</u></h1>
    <div class="d-flex justify-content-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        
        <div class="table-responsive">            
              <!-- Start-->              
              @foreach ($post as $item)
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
                  </div>
              </section>  
              @endforeach   
                <!-- End-->            
          </div>
    </div>
@endsection