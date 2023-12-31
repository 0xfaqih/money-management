@extends('layouts.main')
@section('container')
    
<div class="row justify-content-center">
    <div class="col-md-6">
      
        <main class="form-signin">
            <form action="/register" method="POST">
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center">Registration</h1>
          
              <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" autofocus required value="{{ old('name') }}">
                <label for="name">Your Name</label>
                @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="youremail@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required >
                <label for="password">Password</label>
                @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit" >Submit Registration</button>
              <p class="text-center mt-3">Already have an account? <a href="/login"
                class="text-decoration-none">Login</a></p>
            </form>
          </main>
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
</div>


@endsection