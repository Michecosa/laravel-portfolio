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
  <div class="form-check form-switch mb-3">
    <input class="form-check-input" type="checkbox" role="switch" name="is_completed" id="is_completed" value="1" {{ old('is_completed') ? 'checked' : '' }}>
    <label class="form-check-label" for="is_completed">Progetto Completato</label>
  </div>
  <button type="submit">Save</button>
</form>
@endsection