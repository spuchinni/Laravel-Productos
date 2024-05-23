@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <a href="{{ route('productos.index') }}" class="btn btn-primary">{{ __('Ver productos') }}</a>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- Cambiando el texto por el nombre del usuario logueado -->
                    {{ __('Hola') }}, {{ Auth::user()->name }}!

                    <!-- Agregando un botón con estilo para modificar datos del usuario -->
                    <a href="{{ route('perfil.edit') }}" class="btn btn-primary">{{ __('Modificar datos de usuario') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

