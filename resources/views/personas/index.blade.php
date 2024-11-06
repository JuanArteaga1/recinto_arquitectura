@extends('layouts.layout')
@section('title','lista personas')
@section('content')
<div class="row">
    <h1 class="text-center">lista personas</h1>


</div>
<div class="row justify-content-center">
    <div class="col-10">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">telefono</th>
                <th scope="col">correo</th>
                <th scope="col">ACTUALIZAR Y ELIMINAR</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($personas_tabla as $personas)
              <tr>

                <th scope="row"></th>
                <td>{{$personas->nombre_completo }}</td>
                <td>{{$personas->telefono}}</td>
                <td>{{$personas->correo_electronico}}</td>
                <td>
                  <a  href="{{route('persona.edit',$personas->id)}}" type="a" class="btn btn-info">ACTUALIZAR</a>
                  <a type="a" class="btn btn-danger">ELIMINAR</a>
                </td>
              </tr>
                  
              @endforeach
              
            </tbody>
            
          </table>
          <a class="btn btn-success" href="{{route('persona.create')}}">registrar persona</a>
    </div>

</div>
@endsection