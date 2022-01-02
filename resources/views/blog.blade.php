{{-- @dd($blog) --}}


@extends('layouts.main')

@section('container')
@foreach($blog as $bl)

<div class="mb-4">


  <h2>Judul : {{ $bl->title }}</h2>
  <a href="/blog/{{ $bl->slug }}"> {{ $bl->slug }} </a>
  <h5>Penulis : {{ $bl->name }}</h5>
  <h6>Isinya : {{ $bl->excerpt }}</h6>
  </div>
@endforeach
@endsection



