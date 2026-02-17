@extends('layouts.admin')

@section('content')
  <table> {{-- Si ora le faccio diventare delle card un attimo --}}
    <thead>
      <tr>
        <th>Title</th>
        <th>Cover</th>
        <th>Status</th>
        <th>Details</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($projects as $project)
          <tr>
            <td>{{$project->title}}</td>
            <td>{{$project->cover_image}}</td>
            <td>{{$project->status_label}}</td>
            <td>
              <a href="{{ route('projects.show', $project->id) }}">Check it out!</a>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
@endsection