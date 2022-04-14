@extends('layouts.main')


@section('tampilan')
<section class="vh-100" style="background-color: #161616;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">      
      <div class="col col-xl-10">
          @if (session()->has('success'))  
            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
              <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </symbol>
            </svg>
            <div class="alert alert-success d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              <div>
                Registrasi Berhasil!
              </div>
            </div>
          @endif

          @if (session()->has('loginError'))  
          <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
              <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
          </svg>
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              Tidak Berhasil Login!
            </div>
          </div>
          @endif          
        <div class="card" style="border-radius: 1rem;">          
          <div class="row g-0" style="background-color: #fafafa ">
            <div class="col-md-6 col-lg-5 d-none d-md-block">              
              <img src="../assets/login1.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="/login/login" method="POST">
                  @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #4eff18;"></i>
                    <span class="h1 fw-bold mb-0">Login</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-floating mb-3">
                    <input type="text" name="username" class="form-control @error('username') is-invalid              
                    @enderror" id="username" placeholder="Username" autofocus required>
                    <label for="username">Username</label>
                    @error('username')
                      <div class="invalid-feedback">{{ $message }}}}</div>
                    @enderror
                  </div>
                  <div class="form-floating mb-4">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                  </div>

                  <div class="d-grid gap-2 mb-4">
                    <button type="submit" class="btn btn-outline-success" q>Login</button>
                  </div>
                  
                  <p class="mb-5 pb-lg-2 mt-2" style="color: #000000;">Don't have an account? <a href="/register/register"
                      style="color: #31a300;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>
 <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
      });
    }, 2000);
  </script>
@endsection