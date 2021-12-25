{{-- @dd($blog) --}}


@extends('layouts.main')

@section('container')
@foreach($blog as $bl)
  <h2>Judul : {{ $bl->title }}</h2>
  <a href="/blog/{{ $bl->slug }}"> {{ $bl->slug }} </a>
  <h5>Penulis : {{ $bl->author }}</h5>
  <h6>Isinya : {{ $bl->excerpt }}</h6>
@endforeach
@endsection



