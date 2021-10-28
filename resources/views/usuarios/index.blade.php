@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <h2>Listado de Usuarios</h2><br/>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped table-sm">
          <thead>
           <tr class="bg-primary">
              <th>N°</th>
              <th>Rut</th>
              <th>Nombre</th>
              <th>Correo</th>
              <th>Region</th>
              <th>Opciones </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($usuarios as $usuario)
              <tr>
                <td>{{ $usuario->id }}</td>
                <td>{{ $usuario->rut }}</td>
                <td>{{ $usuario->nombre." ".$usuario->apellido }}</td>
                <td>{{ $usuario->correo }}</td>
                <td>{{ $usuario->region->nombre }}</td>
                <td>
                 <button type="button" class="btn btn-info btn-md">
                    <i class="fa fa-edit fa-2x"></i> Editar
                 </button>
                 <button type="button" class="btn btn-danger btn-md">
                    <i class="fa fa-trash fa-2x"></i> Eliminar
                 </button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection