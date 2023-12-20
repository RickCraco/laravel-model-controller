@extends('layouts.app')

@section('title', $movie->title)

@section('content')

<h1 class="text-center">{{ $movie->title }}</h1>
<div class="d-flex justify-content-center">
    <img src="{{ $movie->image }}" alt="{{ $movie->title }}" class="w-25">
</div>
<h5 class="text-center">{{$movie->original_title}}</h5>

@endsection