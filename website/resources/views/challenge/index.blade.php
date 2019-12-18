@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h1 class="text-center">Stage Challenges</h1>
        </div>
    </div>
    <div class="row justify-content-center">
        @foreach ($challenges as $challenge)
        <div class="col-md-5 mt-3">
            <div class="card challenge-cards mb-3">
                <div class="card-body position-relative">
                    <h3 class="card-title text-center">{{ $challenge->title }}</h3>
                    <h5 class="card-subtitle text-center mb-2">{{ $challenge->subtitle }}</h5>
                    <hr class="my-4">
                    <p class="card-text overflow-auto overflow-small">{{ $challenge->content }}</p>
                    <a href="{{ route('challenge.show', $challenge->id) }}" class="btn btn-primary btn-block position-absolute fixed-bottom mb-3">Open Challenge</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection