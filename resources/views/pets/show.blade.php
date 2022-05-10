@extends('templates.base')

@section('title', $pageTitle)

@section('content')

    <ul>
        <li>
            {{ $pet['name'] }}, {{ $pet['species'] }}, {{ $pet['age'] }}
        </li>
    </ul>
    <a href="{{ route('pets.index') }}">Back To Pets </a>

@endsection
