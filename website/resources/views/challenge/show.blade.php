@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-8">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('challenge.index') }}">Challanges</a></li>
                @if($solution != null)
                <li class="breadcrumb-item"><a href="{{ route('challenge.show', $challenge->id) }}">{{$challenge->title}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">Solution</li>
                @else
                <li class="breadcrumb-item active" aria-current="page"><a href="#">{{$challenge->title}}</a></li>
                @endif
            </ol>
        </nav>

        <div class="jumbotron">
            <h1 class="display-4 text-center">{{ $challenge->title }}</h1>
            <h3 class="text-center mb-3">{{ $challenge->subtitle }}</h3>
            <p class="lead">{{ $challenge->content }}</p>
            <hr class="my-4">
            <!-- Challenge 2 result-->
            @if(is_array($solution))
            <div class="overflow-auto overflow-large">
                @foreach ($solution as $answer)
                <p>{{$answer}}</p>
                @endforeach
            </div>
            <!-- Challenge 1 result -->
            @elseif($solution != null)
            <p>{{ $solution }}</p>
            @else
            <p>{{ $challenge->assignment}}</p>
            <a class="btn btn-primary btn-block" href="{{ route('solveChallenge', $challenge->id) }}" role="button" id="$challenge->id">Solution</a>
            @endif
        </div>
    </div>
</div>

@endsection