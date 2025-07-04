@extends('admin.admin')

@section('title', $option->exists ? 'Modifier une option' : 'Ajouter une option')

@section('content')
    <form class="vstack gap-2" action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}" method="post">
        @csrf
        @method($option->exists ? 'put' : 'post')
       
        @include('shared.input', ['name' => 'name', 'label' => 'Nom', 'value' => $option->name])
        
        <div>
            <button type="submit" class="btn btn-primary">
                {{ $option->exists ? 'Modifier' : 'Creer' }}
            </button>
        </div>
    </form>
@endsection