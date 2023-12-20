@extends('layouts.app')

@section('title', $movie->title)

@section('content')

<h1 class="text-center">{{ $movie->title }}</h1>
<div>
    <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
    <p>{{ $movie->description }}</p>
</div>