@extends('layouts.main')

@section('container')
<h1 class="mb-5"> Post  Category : {{ $category }}</h1>
  
{{-- <h1 class="mb-5">{{ $title }}</h1> --}}
@if($posts->count())
<div class="card mb-3">
  <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h3 class="card-title">
      <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a>
      
    </h3>
    <p>
      <small class="text-muted">

      
      By. <a href="/author/{{ $posts[0]->author->username }}" class="text-decoration-none"> {{ $posts[0]->author->name }} </a> 
      in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none"> {{ $posts[0]->category->name }} </a>
    {{ $posts[0]->created_at->diffForHumans() }}
    </small>
    </p>
    {{-- <small class="card-text"><small class="text-muted">Last updated 3 mins ago</small></small> --}}
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary"> Read more </a>
  </div>
</div>
@else
<p class="text-center fs-4">No post found</p>
@endif

<div class="container">
  <div class="row">
    @foreach($posts->skip(1) as $post)
    <div class="col-lg-4 mb-3">
      <div class="card" style="width: 18rem;">
        <div class="position-absolute bg-dark px-2 py-2 " style="background-color: rgb(0,0,0,0.7)">
          <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }} </a>
        </div>
        <img src="https://source.unsplash.com/500x500/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
        <div class="card-body">
          <h5 class="card-title">
            <a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }} </a>
          </h5>
          <p><small class="text-muted">
        By. <a href="/author/{{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }} </a> 
        in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }} </a>
       {{ $post->created_at->diffForHumans() }}
      </small>
      </p>
      <p> {{ $post->excerpt }}</p>
          <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>




{{-- @foreach ($posts as $post)
    <article>
      <h2> By <a href="/post/{{ $post->slug }}"> {{ $post->title }}</a></h2>
      <p>{{  $post->excerpt  }}</p>
    </article>
@endforeach --}}


  <a href="/posts">Kembali</a>
@endsection
