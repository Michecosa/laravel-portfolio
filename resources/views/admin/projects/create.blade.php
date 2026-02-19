@extends('layouts.admin')

@section('content')
<h1>Add a new project</h1>
    
<form action="{{ route("projects.store") }}" method="POST">
  @csrf
  <div class="form-control mb-3 d-flex flex-column">
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
  </div>
  <div class="form-control mb-3 d-flex flex-column">
    <label for="description">Description</label>
    <textarea type="text" name="description" id="description" rows="5"></textarea>
  </div>
  <div class="form-control mb-3 d-flex flex-column">
    <label for="cover_image">Cover image (src)</label>
    <input type="text" name="cover_image" id="cover_image">
  </div>

  <button type="submit">Save</button>
</form>
@endsection