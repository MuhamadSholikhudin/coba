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
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mb-2">
        <span data-feather="edit"></span>Edit
        </a>

        <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger border-0" onclick="return confirm(' Are you sur?')"> 
            <span data-feather="x-circle"></span> Delete
          </button>
        </form>

        @if($post->image)
            <div style="max-height:400px; overflow:hidden;">
                <img src="{{ asset('storage/')."/" . $post->image }}" class="img-fluid mb-3" alt="{{ $post->category->name }}">
            </div>
        @else
            <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mb-3" alt="{{ $post->category->name }}">
        @endif
        {{-- <p> By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none"> {{ $post->author->name }}</a> 
        in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p> --}}

              {!!  $post->body  !!}
      </article>

      <a href="/dashboard/posts">Back to post</a>
    </div>
  </div>
</div>
@endsection
