@extends('base')

@section('title', 'Se connecter')

@section('content')
    <div class="container mt-4">
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('shared.flash')
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">
                            Se connecter
                        </h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                @include('shared.input', ['label' => 'Email', 'name' => 'email', 'type' => 'email', 'required' => true])
                            </div>
                            <div class="mb-3">
                                @include('shared.input', ['label' => 'Mot de passe', 'name' => 'password', 'type' => 'password', 'required' => true])
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary">
                                    Se connecter
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
