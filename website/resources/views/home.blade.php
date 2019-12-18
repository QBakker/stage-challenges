@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="jumbotron">
            <h1 class="display-4 text-center">Home</h1>
            <h3 class="text-center mb-3">Stage Challenges Lyfter</h3>
            <hr class="my-4">
            <p class="lead">Om een kans te maken op een stageplekje bij ons hebben wij een aantal challenges gemaakt om het niveau van jou te meten.</p>
            <p>Klik hieronder op de link om de opdrachten te kunnen bekijken</p>
            <a class="btn btn-primary btn-block" href="{{ url('/challenge') }}" role="button" id="$challenge->id">Challenges</a>
        </div>
    </div>
</div>
@endsection