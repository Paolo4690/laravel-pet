@extends('templates.base')

@section('title', 'Pets Listing')

@section('content')

    <ul>
        @foreach ($pets as $pet)
        <li>
            <a href="{{ route('pets.show', $pet->id) }}">{{ $pet['age'] }} </a>
            {{ $pets->links() }}
        </li>
        @endforeach
    </ul>

@endsection
