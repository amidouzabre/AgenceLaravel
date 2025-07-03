@extends('admin.admin')

@section('title', $property->exists ? 'Modifier un bien' : 'Ajouter un bien')

@section('content')
    <form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post">
        @csrf
        @method($property->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Titre', 'name' => 'title', 'value' => $property->title])
        @include('shared.input', ['label' => 'Surface', 'name' => 'surface', 'type' => 'number', 'value' => $property->surface])
        @include('shared.input', ['label' => 'Prix', 'name' => 'price', 'type' => 'number', 'value' => $property->price])
        @include('shared.input', ['label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'value' => $property->description])
        <div>
            <button type="submit" class="btn btn-primary">
                {{ $property->exists ? 'Modifier' : 'Creer' }}
            </button>
        </div>
    </form>
@endsection