@extends('layouts.app')

@section('content')
<h1 class="text-center pt-5">Movies</h1>
<div class="movies-container py-5">
    <div class="container">
        <div class="row row-cols-5 g-4">
            @foreach ($movies as $movie)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-4">{{ $movie->title }}</h5>
                            <p class="card-text"> 
                                <span class="fw-bold">Original title: </span>{{ $movie->original_title }}
                            </p>
                            <p class="card-text"> 
                                <span class="fw-bold">Nationality: </span>{{ $movie->nationality }}
                            </p>
                            <p class="card-text"> 
                                <span class="fw-bold">Date: </span>{{ $movie->date }}
                            </p>
                            <p class="card-text"> 
                                <span class="fw-bold">Vote: </span>{{ $movie->vote }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
