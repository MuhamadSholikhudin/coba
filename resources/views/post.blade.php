@extends('layouts.main')

@section('container')

  <article>
      <h2>Judul : {{ $blog->title }}</h2>
      <a href="/blog/ {{ $blog->id }}"> {{ $blog->id }} </a>
      <h5>Penulis : {!! $blog['penulis'] !!}</h5>
      <h6>Isinya : {!!  $blog->body !!}</h6>
  </article>

  <a href="/blog">Kembali</a>
@endsection

