@extends('base')

@section('title', 'Tous nos biens')

@section('content')

    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">
            <input type="number" placeholder="Surface minimum" name="surface" class="form-control" value="{{ $input['surface'] ?? '' }}">
            <input type="number" placeholder="Nombre de piece maximum" name="rooms" class="form-control" value="{{ $input['rooms'] ?? '' }}">
            <input type="number" placeholder="Budget max" name="price" class="form-control" value="{{ $input['price'] ?? '' }}">
            <input type="text" placeholder="Mot clef" name="title" class="form-control" value="{{ $input['title'] ?? '' }}">
            <button class="btn btn-primary btn-sm flex-grow-0">Rechercher</button>
        </form>
    </div>


    <div class="container">
        <div class="row">
            @foreach($properties as $property)
                <div class="col-3 mb-4">
                    @include('property.card')
                </div>
            @endforeach
        </div>

         <div class="my-4">
            {{ $properties->links() }}
        </div>

    </div>
   
@endsection