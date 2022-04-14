<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous">      
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
    <title>Login Admin</title>
</head>
<body class="bg-dark">    
<section class="vh-100" style="background-color: #161616;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">      
      <div class="col col-xl-10">
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
          <div class="row g-0" style="background-color: #d1e5ff ">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="/login/admin" method="POST">
                  @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-6x me-3" style="color: #0061f1;"></i>
                    <span class="h1 fw-bold mb-0">Login Admin</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Masukkan Username dan Password</h5>

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
                    <button type="submit" class="btn btn-outline-primary">Login</button>
                  </div>    
                </form>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</body>
</html>


