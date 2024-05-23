@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('Productos') }}</div>

                <div class="card-body">
                    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">{{ __('Agregar Producto') }}</a>
                    
                    <div class="row">
                        @foreach ($productos as $producto)
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <img src="{{ $producto->imagen }}" class="card-img-top" alt="{{ $producto->nombre }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $producto->nombre }}</h5>
                                        <p class="card-text">{{ $producto->descripcion }}</p>
                                        <p class="card-text">{{ __('Precio') }}: {{ $producto->precio }}</p>
                                        <form action="{{ route('carrito.agregar', $producto->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-success">{{ __('Agregar al carrito') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
