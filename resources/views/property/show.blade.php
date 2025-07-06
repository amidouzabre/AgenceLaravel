@extends('base')

@section('title', $property->title)

@section('content')
<div class="container">
    <h1>{{ $property->title }}</h1>
    <h2>{{ $property->rooms }} pièces - {{ $property->surface }} m²</h2>
    <div class="text-primary fw-bold" style="font-size: 4rem;">
        {{ number_format($property->price, thousands_separator: ' ') }} €
    </div>
    <hr>

    <div class="mt-4">
        <h4>Intéressé par ce bien ?</h4>
        <form action="" method="post" class="vstack gap-3">
            @csrf
            <div class="row">
                @include('shared.input', ['class' => 'col', 'name' => 'firstname', 'label' => 'Prénom']) 
                @include('shared.input', ['class' => 'col', 'name' => 'lastname', 'label' => 'Nom']) 
            </div>
            <div class="row">
                @include('shared.input', ['class' => 'col', 'name' => 'phone', 'label' => 'Telephone']) 
                @include('shared.input', ['type' => 'email', 'class' => 'col', 'name' => 'email', 'label' => 'Email']) 
            </div>
            @include('shared.input', ['type' => 'textarea', 'class' => 'col', 'name' => 'message', 'label' => 'Votre message']) 
            <div>
                <button class="btn btn-primary">
                    Nous contacter 
                </button>
            </div>

        </form>
    </div>
</div>
@endsection