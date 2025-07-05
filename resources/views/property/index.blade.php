@extends('base')

@section('title', 'Tous nos biens')

@section('content')
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