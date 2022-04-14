@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">CREATE KUPON</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/servicesKupon">
            @csrf
            <div class="mb-3">
              <label for="nilai" class="form-label">Diskon</label>
              <input type="text" class="form-control @error('nilai') is-invalid @enderror" id="nilai" name="nilai" value="{{ old('nilai') }}">
              @error('nilai')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="tanggalmulai" class="form-label">Tanggal Mulai</label>
                <input type="text" placeholder="YYYY-MM-DD"  class="form-control  @error('tanggalmulai') is-invalid @enderror" id="tanggalmulai" name="tanggalmulai" required autofocus value="{{ old('tanggalmulai') }}">
                @error('tanggalmulai')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="tanggalberakhir" class="form-label">Tanggal Berakhir</label>
                <input type="text" placeholder="YYYY-MM-DD" class="form-control  @error('tanggalberakhir') is-invalid @enderror" id="tanggalberakhir" name="tanggalberakhir" value="{{ old('tanggalberakhir') }}">
                @error('tanggalberakhir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="kode" class="form-label">Kode</label>
                <input type="text" class="form-control  @error('kode') is-invalid @enderror" id="kode" name="kode" value="{{ old('kode') }}">
                @error('kode')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
          </form>        
    </div>
@endsection