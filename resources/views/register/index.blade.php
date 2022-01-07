@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-6">
    <main class="form-registration">
        <h1 class="h3 mb-3 fw-normal text-center">Register Login</h1>
  <form action="/register" method="POST" enctype="application/x-www-form-urlencoded">
    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
@csrf
    <div class="form-floating">
      <input type="text" class="form-control rounded-top @error('name') is-invalid  @enderror" id="floatingInput" name="name" value="{{ old('name') }}" placeholder="name" required>
      <label for="floatingInput">Name</label>
            @error('name') 
       <div  class="invalid-feedback">
      {{ $message }}.
    </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control @error('username') is-invalid  @enderror" id="username" name="username" placeholder="username" value="{{ old('username') }}" required>
      <label for="username">Username</label>
                  @error('username') 
       <div  class="invalid-feedback">
      {{ $message }}.
    </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="email" class="form-control @error('email') is-invalid  @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="email" required>
      <label for="email">Email Address</label>
                  @error('email') 
       <div  class="invalid-feedback">
      {{ $message }}.
    </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control rounded-bottom @error('password') is-invalid  @enderror" id="floatingPassword" name="password" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
                  @error('password') 
       <div  class="invalid-feedback">
      {{ $message }}.
    </div>
      @enderror
    </div>

    {{-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> --}}
    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
    {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}

  </form>
  <small class="d-block text-center mt-3">
      Already Registed ? <a href="/login">Login!</a>
  </small>
</main>
    </div>
</div>

@endsection