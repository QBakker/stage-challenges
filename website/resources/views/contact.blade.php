@extends('layouts.app')

@section('content')
<div class="container text-center">
    <div class="row justify-content-center">
        <h1>Contact</h1>

    </div>
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <img src="/img/Team-Vincent.png" class="card-img-top" alt="Quinten Bakker">
                <div class="card-body">
                    <h5 class="font-lyfter">Quinten Bakker</h5>
                    <p class="card-text pt-2">Developer Jedi Padawan</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-5 mb-2">
        <div class="col-4">
            <div class="card p-5">
                <div class="body">
                    <ion-icon class="ion-icons" name="phone-portrait" size="large"></ion-icon>
                    <h5 class="font-lyfter">Bel</h5>
                    <p>Bel en weet meer.</p>
                    <h6>(06) 15 12 07 93</h6>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card p-5">
                <div class="body">
                    <ion-icon class="ion-icons" name="mail" size="large"></ion-icon>
                    <h5 class="font-lyfter">Mail</h5>
                    <p>Stuur een mail en krijg snel reactie</p>
                    <h6>info@quintenbakker.nl</h6>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card p-5">
                <div class="body">
                    <ion-icon class="ion-icons" name="pin" size="large"></ion-icon>
                    <h5 class="font-lyfter">Koffie</h5>
                    <p>Kom eens langs</p>
                    <h6>Oberonlaan 11 Dordrecht</h6>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection