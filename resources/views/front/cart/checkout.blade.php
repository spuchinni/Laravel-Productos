@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-body">
                @if(Cart::count())
                    <table class="table table-striped">
                        <thead>
                            <th>NOMBRE</th>
                            <th>CANTIDAD</th>
                            <th>PRECIO UNITARIO</th>
                            <th>PRECIO TOTAL</th>
                        </thead>
                        <tbody>
                            @foreach (Cart::content() as $item)
                            <tr class="align-middle">
                                <td>{{$item->name}}</td>
                                <td>{{$item->qty}}</td>
                                <td>${{number_format($item->price,2)}}</td>
                                <td>${{number_format($item->qty*$item->price,2)}}</td>
                                <td>
                                    <form action="{{route('removeitem')}}" method= "post">
                                        @csrf
                                        <input type="hidden" name="rowId" value="{{$item->rowId}}">
                                        <button type="submit" name="btn" class="btn btn-danger w-100">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                    <div class="text-center"> 
                        <a href="{{route('clear')}}" class="btn btn-warning"> Vaciar Carrito </a>
                    </div>

                            @else
                            <div class="text-center"> 
                                <a href="{{route('productos')}}" class="btn btn-success">  Agregar Productos <i class="fas fa-shopping-basket"></i> </a>
                            </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection