@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Agregar Producto') }}</div>

                <div class="card-body">
                    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="sku">{{ __('Código (SKU)') }}</label>
                            <input type="text" name="sku" id="sku" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="name">{{ __('Nombre del Producto') }}</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description">{{ __('Descripción') }}</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">{{ __('Precio del Producto') }}</label>
                            <input type="number" name="price" id="price" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="image">{{ __('Imagen del Producto') }}</label>
                            <input type="file" name="image" id="image" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Guardar Producto') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
