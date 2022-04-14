@extends('layouts.main')

@section('tampilan')

<!-- Section: Design Block -->
<section class="text-center text-lg-start">
    <style>
      .cascading-right {
        margin-right: -50px;
      }
  
      @media (max-width: 991.98px) {
        .cascading-right {
          margin-right: 0;
        }
      }
    </style>
  
    <!-- Jumbotron -->
    <div class="container py-4">
      <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="card cascading-right text-dark" style="
              background: hsla(0, 0%, 24%, 0.55);
              backdrop-filter: blur(30px);
              ">
            <div class="card-body p-5 shadow-5 text-center">
              <h2 class="fw-bold mb-5" style="color : #4bfa00">Sign up</h2>
              <form action="/register/register" method="POST">
                @csrf
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-floating">
                        <input type="text" id="firstName" name="firstName" class="form-control @error('firstName') is-invalid @enderror"placeholder="First Name" value="{{ old('firstName') }}"/>
                        <label class="form-label" for="form3Example2"> First Name</label>
                        @error('firstName') 
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-floating">
                      <input type="text" id="lastName" name="lastName" class="form-control @error('lastName') is-invalid @enderror"placeholder="Last Name" value="{{ old('lastName') }}"/>
                      <label class="form-label" for="form3Example2">Last Name</label>
                      @error('lastName') 
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>
                </div>
                {{-- alamat dan notelp --}}
                <div class="form-floating mb-4">
                    <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" cols="30" rows="30" placeholder="Address" value="{{ old('alamat') }}""></textarea>
                    <label class="form-label" for="form3Example3">Address</label>                    
                    @error('alamat') 
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-floating mb-4">
                    <input type="text" id="notelp" name="notelp" class="form-control @error('notelp') is-invalid @enderror"placeholder="Phone Number" value="{{ old('notelp') }}"/>
                    <label class="form-label" for="form3Example3">Phone Number</label>
                    @error('notelp') 
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <!-- Email input -->
                <div class="form-floating mb-4">
                  <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror"placeholder="Email address" value="{{ old('email') }}"/>
                  <label class="form-label" for="form3Example3">Email address</label>
                  @error('email') 
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>

                <!-- Username input -->
                <div class="form-floating mb-4">
                    <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror"placeholder="Username" value="{{ old('username') }}"/>
                    <label class="form-label" for="form3Example3">Username</label>
                    @error('username') 
                    <div class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
  
                <!-- Password input -->
                <div class="form-floating mb-4">
                  <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"/>
                  <label class="form-label" for="form3Example4">Password</label>
                  @error('password') 
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div>
                
                <!-- Checkbox -->
                {{-- <div class="form-check d-flex justify-content-center mb-4 text-light">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                  <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                  </label>
                </div> --}}
  
                <!-- Submit button -->
                <div class="d-grid gap-2">
                <button type="submit" class="btn btn-outline-success btn-block mb-4 mt-4 text-light">
                  Sign up
                </button>
                </div>
  
                <!-- Register buttons -->
                <div class="text-center">
                  {{-- <p>or sign up with:</p>
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>
  
                  <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                  </button> --}}
                </div>
              </form>
            </div>
          </div>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0">
          <img src="../assets/register.png" class="w-200 rounded-4 shadow-4"
            alt="" />
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>
  <!-- Section: Design Block -->

@endsection