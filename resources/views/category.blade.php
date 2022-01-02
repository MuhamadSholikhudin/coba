@extends('layouts.main')

@section('container')
<h1 class="mb-5"> Post  Category : {{ $category }}</h1>
  
@foreach ($posts as $post)
    <article>
      <h2> By <a href="/post/{{ $post->slug }}"> {{ $post->title }}</a></h2>
      <p>{{  $post->excerpt  }}</p>
    </article>
@endforeach


  <a href="/posts">Kembali</a>
@endsection
