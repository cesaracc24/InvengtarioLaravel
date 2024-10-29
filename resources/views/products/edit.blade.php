@extends('layouts.plantilla')
@section('title','Formulario para crear Productos')
@section('content')
<div class="container mt-5"> 
    <h4 class="text-center mb-4">Editar Producto</h4>
    <form action="{{route('products.update', $product) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="code">Código</label>
                <input type="text" name="code" id="code" class="form-control" value="{{old('code',$product->code)}}">
            </div>                        
            <div class="col-md-6 mb-3">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" value="{{old('name',$product->name)}}">
            </div>
        </div>     
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="ammount">Cantidad</label>
                <input type="number" name="ammount" id="ammount" class="form-control" value="{{old('ammount',$product->ammount)}}">
            </div>
            <div class="col-md-6 mb-3">
                <label for="unit">Unidad</label>
                <input type="text" name="unit" id="unit" class="form-control" value="{{old('unit',$product->unit)}}">
            </div>
        </div>                 
        <div class="text-center mt-4">
            <button class="btn btn-outline-primary" type="submit">Modificar</button>
    </form>
</div>

@endsection