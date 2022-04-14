@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">EDIT HOME</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/home/{{ $post->id }}"enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="gambar" class="form-label">Gambar</label>
              <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" name="gambar">
              @error('gambar')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>
            <label class="form-label" for="nama">Nama</label>  
            <div class="form-floating mb-4">                   
                <textarea class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" cols="30"  placeholder="Address">{{ old('nama', $post->nama)}}</textarea>                                  
                @error('nama') 
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="form3Example3">Deskripsi</label>  
                <div class="form-floating mb-4">                   
                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="deskripsi" cols="30"  placeholder="Address">{{ old('deskripsi', $post->deskripsi)}}</textarea>                                  
                    @error('deskripsi') 
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
          </form>        
    </div>
@endsection