{{-- @dd($blog) --}}


@extends('layouts.main')

@section('container')
@foreach($posts as $post)

  <div class="mb-4">
    <article class="mb-5 border-bottom pb-4">
      <h2><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a> </h2>
      <p>
        By. <a href="/author/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }} </a> 
        in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }} </a>
      </p>
      <p> {{ $post->excerpt }}</p>
      <a href="/post/{{ $post->slug }}" class="text-decoration-none"> {{ $post->slug }} </a>
    </article>
  </div>
@endforeach
@endsection