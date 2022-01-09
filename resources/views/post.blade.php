@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <article>

        <h1 class="mb-3 ">{{ $post->title }}</h1>
    @if($post->image)
      <div style="max-height:400px; overflow:hidden;">
        <img src="{{ asset('storage')."/" . $post->image }}" class="card-img-top" alt="{{ $post->category->name }}">
      </div>
    @else
        <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mb-3" alt="{{ $post->category->name }}">
    @endif

        <p> By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> 
        in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>
              {!!  $post->body  !!}
      </article>

      <a href="/posts">Back to post</a>
    </div>
  </div>
</div>

@endsection

