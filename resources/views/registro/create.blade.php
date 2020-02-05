@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form method="POST" action="{{ route('regitsro.create') }}">
            <div class="form-group">
                <label for="cedula">Cedula</label>
                <input type="email" class="form-control" id="cedula" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                <input type="email" class="form-control" id="fecha_nacimiento" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="email" class="form-control" id="nombre" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="email" class="form-control" id="apellido" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="email" class="form-control" id="direccion" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="email" class="form-control" id="telefono" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="departamento">Departamento</label>
                <input type="email" class="form-control" id="departamento" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="municipio">Municipio</label>
                <input type="email" class="form-control" id="municipio" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="imagen">Fotografia</label>
                <input type="email" class="form-control" id="imagen" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
@endsection
