@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <h1 class="text-center">Welcome</h1>
        <p class="text-center">If you want to select one of our movies please click here :</p>
        <div class="d-flex justify-content-center">
            <a href="{{ route('movies.index') }}" class="btn btn-primary">Start</a>
        </div>
    </main>
@endsection
