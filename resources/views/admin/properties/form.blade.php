@extends('admin.admin')

@section('title', $property->exists ? 'Modifier un bien' : 'Ajouter un bien')

@section('content')
    <form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post">
        @csrf
        @method($property->exists ? 'put' : 'post')
        <div class="row">
            @include('shared.input', ['class' => 'col', 'name' => 'title', 'value' => $property->title])
            <div class="col row">
                @include('shared.input', ['class' => 'col', 'name' => 'surface', 'type' => 'number', 'value' => $property->surface])
                @include('shared.input', ['class' => 'col', 'name' => 'price', 'label' => 'Prix', 'type' => 'number', 'value' => $property->price])
            </div>
        </div>
        @include('shared.input', ['type' => 'textarea', 'class' => 'col', 'name' => 'description', 'type' => 'textarea', 'value' => $property->description])
        <div>
            <button type="submit" class="btn btn-primary">
                {{ $property->exists ? 'Modifier' : 'Creer' }}
            </button>
        </div>
    </form>
@endsection