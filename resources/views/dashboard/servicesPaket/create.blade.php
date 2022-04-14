@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">CREATE PAKET</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/servicesPaket" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="paket_gambar" class="form-label">Gambar</label>
              <input type="file" class="form-control @error('paket_gambar') is-invalid @enderror" id="paket_gambar" name="paket_gambar">
              @error('paket_gambar')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="judulkartu" class="form-label">Judul Kartu</label>
                <input type="text" class="form-control  @error('judulkartu') is-invalid @enderror" id="judulkartu" name="judulkartu" required autofocus value="{{ old('judulkartu') }}">
                @error('judulkartu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control  @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}">
                @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tempat" class="form-label">Tempat</label>
                <input type="text" class="form-control  @error('tempat') is-invalid @enderror" id="tempat" name="tempat" value="{{ old('tempat') }}">
                @error('tempat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
          </form>        
    </div>
@endsection