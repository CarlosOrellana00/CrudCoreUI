@extends('layouts.app')
@section('content')
<form action="{{ route('usuarios.store') }}" method="POST" >
@csrf
  <div class="col-sm-6">
    <div class="card">
      <div class="card-header"><strong>Usuario</strong>
      <br>
      <small>Registe un nuevo usuario rellenando el formulario</small></div>
        <div class="card-body">

            <div class="form-group">
              <label for="company">RUT</label>
              <input class="form-control" id="rut" name="rut" type="text" placeholder="18415134-6">
            </div>

            <div class="form-group">
              <label for="company">Nombre</label>
              <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Esteban">
            </div>

            <div class="form-group">
              <label for="company">Apellido</label>
              <input class="form-control" id="apellido" name="apellido" type="text" placeholder="Urrutia">
            </div>

            <div class="form-group">
              <label for="company">Correo</label>
              <input class="form-control" id="correo" name="correo" type="email" placeholder="Estur@gmail.com">
            </div>

            <div class="form-group">
              <label for="company">Región</label>
                {{-- {{Form::select('id_region',$regiones,null,[])}} --}}
                <select class="form-select" aria-label="Default select example" name="region" id="region" required>
                  @foreach ($regiones as $r)
                    <option value="{{$r->id}}">"{{$r->nombre}}"</option>
                  @endforeach
                </select>
            </div>

            <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
              <button class="btn btn-block btn-dark" type="submit">Enviar</button>
            </div>

        </div>
      </div>
    </div>
  </div>
</form>
@endsection