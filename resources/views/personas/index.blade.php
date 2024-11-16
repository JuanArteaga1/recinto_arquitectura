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
            <div class="row">
              <div class="col-2"><a href="{{route('personas.edit',$personas->id)}}" class="btn btn-danger"
                  class="btn btn-info">ACTUALIZAR</a></div>
              <div class="col-2">
                <form action="{{route('personas.delete',$personas->id)}}" method="POST">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger" class="btn btn-info"
                    onclick="return confirm('seguro que desea eliminar el registro')" >ELIMINAR
                  </button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <a class="btn btn-success" href="{{route('personas.create')}}">registrar persona</a>
  </div>
</div>
@endsection