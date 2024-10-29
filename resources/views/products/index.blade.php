@extends('layouts.plantilla')
@section('title','Index de productos')
@section('content')

<h4> Listado de Productos </h4>
<a href="{{route('products.create')}}" class="btn btn-primary" role="button"> Agregar Producto</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Código</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Unidad </th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->code}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->ammount}}</td>
                <td>{{$product->unit}}</td>
                <td>
                    <a href="{{route('products.edit', $product)}}" class="btn btn-outline-success">Editar</a>
                    <form action="{{route('products.destroy', $product)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button " class="btn btn-outline-danger">Eliminar</button>
                </form>                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
