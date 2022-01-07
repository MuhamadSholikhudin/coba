@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-6">
@if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>
          {{ session('success') }}

        </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('loginError'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>
          {{ session('loginError') }}

        </strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif

    <main class="form-signin">
      
        <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

  <form action="/login" method="POST" enctype="application/x-www-form-urlencoded">
    @csrf
    {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}

    <div class="form-floating">
      <input type="email" class="form-control  @error('email') is-invalid  @enderror id="email" name="email" value="" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
      <label for="email">Email address</label>

                        @error('email') 
       <div  class="invalid-feedback">
      {{ $message }}.
    </div>
      @enderror
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" name="password"  placeholder="Password" required>
      <label for="password">Password</label>
    </div>

    {{-- <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div> --}}
    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
    {{-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> --}}

  </form>
  <small class="d-block text-center mt-3">
      Not Register ? <a href="/register">Register now!</a>
  </small>
</main>
    </div>
</div>

@endsection