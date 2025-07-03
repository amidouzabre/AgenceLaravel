@extends('admin.admin')

@section('title', $property->exists ? 'Modifier un bien' : 'Ajouter un bien')

@section('content')
    <form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}" method="post">
        @csrf
        @method($property->exists ? 'put' : 'post')
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="surface" class="form-label">Surface</label>
            <input type="number" class="form-control" id="surface" name="surface" value="{{ old('surface') }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">
                {{ $property->exists ? 'Modifier' : 'Creer' }}
            </button>
        </div>
    </form>
@endsection