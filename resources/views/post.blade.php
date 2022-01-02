@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <article>

        <h1 class="mb-3 ">{{ $post->title }}</h1>
              <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mb-3" alt="{{ $post->category->name }}">

        <p> By <a href="/author/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> 
        in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>
              {!!  $post->body  !!}
      </article>

      <a href="/posts">Back to post</a>
    </div>
  </div>
</div>

@endsection

