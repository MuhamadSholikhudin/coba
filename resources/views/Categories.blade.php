@extends('layouts.main')

@section('container')
<h1 class="mb-5"> Post  Categories</h1>
 
<div class="container">
  <div class="row">
    @foreach($categories as $category)
    <div class="col-lg-4">
      <div class="card bg-dark text-white">
        <img src="https://source.unsplash.com/500x500/?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
        <div class="card-img-overlay d-flex align-items-center p-0">
          <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgb(0,0,0,0.7)"><a href="/posts?category={{ $category->slug }}" class="text-decoration-none text-white"> {{ $category->name }}</a></h5>
          {{-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text">Last updated 3 mins ago</p> --}}
        </div>
      </div>

    </div>
    @endforeach
  </div>
</div>



{{-- @foreach($categories as $category)
 <ul>
<li>
<h1><a href="/categories/{{ $category->slug }}"> {{ $category->name }}</a> </h1>
</li>      
      
 </ul>
@endforeach --}}

  <a href="/posts" class="mt-5">Kembali</a>
@endsection
