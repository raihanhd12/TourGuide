@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">ABOUT</h1>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong> {{ session('success') }} </strong> 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>    
    @endif

    <div class="table-responsive">        
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Nomor</th>              
              <th scope="col">Pekerjaan</th>
              <th scope="col">Alamat</th>
              <th scope="col">Umur</th>
              <th scope="col">Hobi</th>
              <th scope="col">Cita - Cita</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($post as $post)
              <tr>
                <td>{{ $loop->iteration }}</td>                
                <td>{{ $post->pekerjaan }}</td>
                <td>{{ $post->alamat}}</td>
                <td>{{ $post->umur}}</td>
                <td>{{ $post->hobi }}</td>
                <td>{{ $post->citacita }}</td>                
                <td>
                    <a href="/dashboard/about/{{ $post->id }}" class="badge bg-info">
                        <span data-feather="eye"> </span>
                    </a>
                    <a href="/dashboard/about/{{ $post->id }}/edit" class="badge bg-warning">
                        <span data-feather="edit"> </span>
                    </a>
                </td>
              </tr>                  
            @endforeach            
          </tbody>
        </table>
      </div>
@endsection