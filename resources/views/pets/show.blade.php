@extends('templates.base')

@section('title', $pageTitle)

@section('content')
    <div class="container d-flex justify-content-center my-5">
        <ul>
            <li class="border border-5 d-inline-block fs-3 p-3">
                {{ $pet['name'] }}, {{ $pet['species'] }}, {{ $pet['age'] }}
            </li>
        </ul>
    </div>
@endsection
