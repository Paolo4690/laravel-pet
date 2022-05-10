@extends('templates.base')

@section('title', $pageTitle)

@section('content')

    <ul>
        <li>
            {{ $pet['name'] }}, {{ $pet['species'] }}, {{ $pet['age'] }}
        </li>
    </ul>

@endsection
