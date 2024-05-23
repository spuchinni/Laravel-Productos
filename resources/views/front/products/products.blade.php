@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       @include ('front.partials.msg')
        @foreach ($products as $item)      
        <div class="col-3 mb-4">            
            <div class="card product-card">
                <img src="/img/{{$item->image}}" class="card-img-top img-fixed" alt="{{$item->name}}">
                <div class="card-body text-center">
                    <h2 class="card-title">{{$item->name}}</h2>
                    <p class="card-text">${{$item->price}}</p> 
                </div>
                <div class="card-footer">
                    <form action="{{route('add')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <input type="submit" name="btn" class="btn btn-success w-100" value="Agregar">
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

<style>
    .product-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }

    .product-card .card-img-top {
        height: 200px; 
        object-fit: cover;
    }

    .product-card .card-body {
        flex-grow: 1;
    }

    .product-card .card-title {
        font-size: 1.25rem;
    }

    .product-card .card-text {
        font-size: 1rem;
    }

    .product-card .card-footer {
        margin-top: auto;
    }

    .product-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
    }
    .product-card .card-img-top.img-fixed {
        height: 200px; 
        width: 100%; 
        object-fit: contain; 
    }

    .product-card .card-body {
        flex-grow: 1;
    }

    .product-card .card-title {
        font-size: 1.25rem;
    }

    .product-card .card-text {
        font-size: 1rem;
    }

    .product-card .card-footer {
        margin-top: auto;
    }
    
</style>