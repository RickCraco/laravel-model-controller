@extends('layouts.app')

@section('title', 'All Movies')

@section('content')

<h1>All Movies</h1>

@foreach($movies as $movie)
<div class="card">
  <img src="{{ $movie->image }}" class="card-img-top" alt="{{ $movie->title }}">
  <div class="card-body">
    <h5 class="card-title">{{ $movie->title }}</h5>
    <p class="card-text">{{ $movie->description }}</p>
    <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">Read more</a>
  </div>
</div>

@endforeach

@endsection