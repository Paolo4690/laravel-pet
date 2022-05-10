@extends('templates.base')
@section('title', 'home')
@section('content')
    <a href="{{ route('pets.index') }}">View Pets Listings</a>
@endsection
