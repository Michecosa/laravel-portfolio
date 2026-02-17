@extends('layouts.admin')

@section('content')
    <ul>
      @foreach ($projects as $project)
          <li>
            {{$project}}
          </li>
      @endforeach
    </ul>
@endsection