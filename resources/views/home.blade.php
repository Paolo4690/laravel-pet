@extends('templates.base')
@section('title', 'home')
@section('content')
    <div class="container my-5">
        <a href="{{ route('pets.index') }}" class="text-decoration-none">View Pets Listings</a>
    </div>
@endsection
