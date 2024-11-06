@extends('layouts.layout')
@section('title','creacion persona')
@section('content')
<div class="row">
    <h1 class="text-center">registrar persona</h1>


</div>
<div class="row justify-content-center">
    <div class="col-6">
        <form method='POST' action="{{route('persona.store')}}">
            @csrf
            @method('POST')
            <div class="mb-3">
                <label for="nombre" class="form-label">nombre</label>
                <input type="text" class="form-control" id="nombre" name='nombre_completo'>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">telefono</label>
                <input type="number" class="form-control" id="telefono" name='telefono'>
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="Email" class="form-control" id="Email" name='correo_electronico'>
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Password</label>
                <input type="password" class="form-control" id="contraseña" name='contraseña'>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">ingresar</button>
            
        </form>
        <a class="btn btn-success" href="{{route('persona.index')}}">lista registrados</a>
        
    </div>

</div>
@endsection