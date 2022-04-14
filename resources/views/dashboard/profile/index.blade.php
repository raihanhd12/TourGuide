@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">GALLERY</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong> {{ session('success') }} </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>    
    @endif

    <div class="table-responsive">
        <a href="/dashboard/profile/create" class="btn btn-primary mb-3">Create New Gallery</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nomor</th>              
              <th scope="col">Gambar</th>
              <th scope="col">Nama</th>
              <th scope="col">Lokasi</th>
              <th scope="col">Deskripsi</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($post as $post)
              <tr>
                <td>{{ $loop->iteration }}</td>                
                <td>{{ $post->gambar }}</td>
                <td>{{ $post->nama }}</td>
                <td>{{ $post->lokasi }}</td>
                <td>{{ $post->deskripsi }}</td>
                <td>
                    <a href="/dashboard/profile/{{ $post->id }}" class="badge bg-info">
                        <span data-feather="eye"> </span>
                    </a>                  
                    <a href="/dashboard/profile/{{ $post->id }}/edit" class="badge bg-warning">
                        <span data-feather="edit"> </span>
                    </a>                    
                    <form action="/dashboard/profile/{{ $post->id }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('Hapus Data?')">
                        <span data-feather="x-circle">
                          </span>
                      </button>                    
                    </form>
                </td>
              </tr>                  
            @endforeach            
          </tbody>
        </table>
      </div>
@endsection