@extends('layouts.main')

<link rel="stylesheet" href="../css/contact.css">

@section('tampilan')
<!-- Layout Pertama Start-->
        @if (session()->has('success'))  
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        </svg>
        <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
            Pesan Berhasil Terkirim
        </div>
        </div>
        @endif
<div class="bg-contact100">
    <div class="container-contact100">
        <div class="wrap-contact100">
            <div class="contact100-pic js-tilt" data-tilt>
                <img src="../assets/profile-pic1.png" alt="IMG">
            </div>
            <form action="/contact" method="POST" class="contact100-form validate-form">
                @csrf
                <span class="contact100-form-title">
                    CONTACT US
                </span>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
                    <input class="input100 @error('namaLengkap') is-invalid @enderror" type="text" id="namaLengkap" name="namaLengkap" placeholder="Nama Lengkap" value="{{ old('namaLengkap') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        
                    </span>
                    @error('namaLengkap') 
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                </div>
                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100 @error('email') is-invalid @enderror" type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    
                    </span>
                        @error('email') 
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                </div>
                <div class="wrap-input100 validate-input" data-validate="Message is required">
                    <textarea class="input100 @error('pesan') is-invalid @enderror" name="pesan" id="pesan" placeholder="Pesan"></textarea>
                    <span class="focus-input100"></span>
                    @error('pesan') 
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="container-contact100-form-btn">
                    <button type="submit" class="contact100-form-btn">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Layout Pertama End -->
@endsection