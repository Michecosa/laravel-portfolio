@extends('layouts.admin')

@section('content')
  <img src="{{$project->cover_image}}" alt="{{$project->title}} image">
  <h2>
    {{$project->title}}
  </h2>
  <small>
    {{$project->is_completed}}
  </small>

  <p>
    {{$project->description}}
  </p>
@endsection