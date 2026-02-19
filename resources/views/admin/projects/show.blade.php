@extends('layouts.admin')

@section('content')
  <img src="{{$project->cover_image}}" alt="{{$project->title}} image">
  <h2>
    {{$project->title}}
  </h2>

  <div class="d-flex gap-2">
    <a href="{{route("projects.edit", $project)}}" class="btn btn-outline-warning">Edit</a>
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Delete
    </button>
  </div>

  <small>
    {{$project->is_completed}}
  </small>

  <p>
    {{$project->description}}
  </p>




<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Danger zone</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Do you want to delete the project?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
        <form action="{{route("projects.destroy", $project)}}" method="POST">
          @csrf
          @method("DELETE")
          <button type="submit" class="btn btn-danger">Elimina</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection