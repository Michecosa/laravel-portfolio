@extends('layouts.admin')

@section('content')
    <h1>Benvenuto nella Dashboard Admin, {{ Auth::user()->name }}</h1>
    <p>Qui puoi gestire i tuoi contenuti.</p>
@endsection