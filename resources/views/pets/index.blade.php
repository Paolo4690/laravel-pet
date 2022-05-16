@extends('templates.base')

@section('title', 'Pets Listing')

@section('content')
    <div class="container my-5">
        <div class="d-flex justify-content-center">
            <ul class="justify-content-center">
                @foreach ($pets as $pet)
                <li class="border border-5 d-inline-block fs-3 p-3">
                    <a href="{{ route('pets.show', $pet->id) }}" class="text-decoration-none font-weight-bold">{{ $pet['age'] }} </a>
                </li>
                @endforeach
            </ul>
        </div>


        <div class="d-flex justify-content-center mt-4">
            {{ $pets->links() }}
        </div>
    </div>
@endsection
