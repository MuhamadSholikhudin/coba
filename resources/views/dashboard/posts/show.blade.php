@extends('dashboard.layouts.main')


@section('container')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <article>

        <h1 class="mb-3 ">{{ $post->title }}</h1>
        <a href="/dashboard/posts" class="btn btn-success mb-2">
          <span data-feather="arrow-left"></span>
          Back to my posts all
        </a>
        <a href="" class="btn btn-warning mb-2">
          <span data-feather="edit"></span>
          Edit
        </a>
        <a href="" class="btn btn-danger mb-2">
          <span data-feather="x-circle"></span>
Delete        </a>
              <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mb-3" alt="{{ $post->category->name }}">

        {{-- <p> By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> 
        in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p> --}}

              {!!  $post->body  !!}
      </article>

      <a href="/posts">Back to post</a>
    </div>
  </div>
</div>
@endsection