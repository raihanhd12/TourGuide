@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">EDIT ABOUT</h1>
    </div>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/about/{{ $post->id }}">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="pekerjaan" class="form-label">Pekerjaan</label>
              <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan', $post->pekerjaan) }}">
              @error('pekerjaan')
                  <div class="invalid-feedback">
                      {{ $message }}
                  </div>
              @enderror
            </div>
            <label class="form-label" for="alamat">Alamat</label>  
            <div class="form-floating mb-4">                   
                <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" cols="30"  placeholder="Address">{{ old('alamat', $post->alamat)}}</textarea>                                  
                @error('alamat') 
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <div class="mb-3">
                <label for="umur" class="form-label">Umur</label>
                <input type="text" class="form-control  @error('umur') is-invalid @enderror" id="umur" name="umur" value="{{ old('umur', $post->umur) }}">
                @error('umur')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="hobi" class="form-label">Hobi</label>
                <input type="text" class="form-control  @error('hobi') is-invalid @enderror" id="hobi" name="hobi" value="{{ old('hobi', $post->hobi) }}">
                @error('hobi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="citacita" class="form-label">Cita - Cita</label>
                <input type="text" class="form-control  @error('citacita') is-invalid @enderror" id="citacita" name="citacita" value="{{ old('citacita', $post->citacita) }}">
                @error('citacita')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>            
            <button type="submit" class="btn btn-primary">Update</button>
          </form>        
    </div>
@endsection