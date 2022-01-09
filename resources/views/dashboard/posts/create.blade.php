@extends('dashboard.layouts.main')


@section('container')


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Post</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>

<div class="col-lg-8">

<form action="/dashboard/posts/" method="POST">
  @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid  @enderror " id="title" name="title" value="{{ old('title') }}" >
    {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
       @error('title') 
       <div  class="invalid-feedback">
      {{ $message }}.
    </div>
      @enderror
  </div>
  <div class="mb-3">
    <label for="slug" class="form-label">Slug</label>
    <input type="text" class="form-control @error('slug') is-invalid  @enderror" id="slug" name="slug" value="{{ old('slug') }}" >
@error('slug') 
       <div  class="invalid-feedback">
      {{ $message }}.
    </div>
      @enderror
  </div>
  <div class="mb-3">
    <label for="category" class="form-label">Title</label>
    <select class="form-select" id="category " name="category_id" >
      @foreach ($categories as $category)       
      @if(old('category_id') == $category->id)
        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
        <option value="{{ $category->id }}" >{{ $category->name }}</option>
        @endif
      @endforeach
    </select>
  </div>
<div class="mb-3">
  <label for="image" class="form-label">Upload image</label>
  <input class="form-control" type="file" name="image" id="image">
</div>
     @error('image') 
       <div  class="invalid-feedback">
      {{ $message }}.
       </div>
      @enderror
  <div class="mb-3">
    <label for="body" class="form-label">Body</label>
      <input id="body" type="hidden" name="body" value="{{ old('body') }}" >
  <trix-editor input="body"></trix-editor>
  @error('slug') 
       <p  class="invalid-feedback">
      {{ $message }}.
       </p>
      @enderror
  </div>
  <button type="submit" class="btn btn-primary">Create Post</button>
</form>
</div>


<script>
const title = document.querySelector('#title');
const slug = document.querySelector('#slug');

title.addEventListener('change', function(){
  fetch('/dashboard/posts/checkSlug?title=' + title.value)
  .then(response => response.json())
  .then(data => slug.value = data.slug)
});

document.addEventListener('trix-file-accept', function(e){
  e.preventDefault();
});


</script>
@endsection
