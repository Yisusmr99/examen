@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form  method="POST" action="{{route('registro.store')}}" accept-charset="UTF-8" role="form" enctype="multipart/form-data" autocomplete="off">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6">
                    <label for="cedula">Cedula</label> 
                    <input type="text" class="form-control" name="cedula" id="cedula" aria-describedby="emailHelp">
                </div>

                <div class="col-md-6">
                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp">
                </div>
    
                <div class="col-md-6">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="emailHelp">
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" aria-describedby="emailHelp">
                </div>
    
                <div class="col-md-6">
                    <label for="telefono">Telefono</label>
                    <input type="number" class="form-control" name="telefono" id="telefono" aria-describedby="emailHelp">
                </div>

            </div>


            <div class="row">

                <div class="col-md-6">
                    <label for="departamento">Departamento</label>
                    <input type="text" class="form-control" name="departamento" id="departamento" aria-describedby="emailHelp">
                </div>
    
                <div class="col-md-6">
                    <label for="municipio">Municipio</label>
                    <input type="text" class="form-control" name="municipio" id="municipio" aria-describedby="emailHelp">
                </div>
                
            </div>


            <div class="row">
                <div class="col-md-12">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                </div>
            </div>

            <br>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        </div>
    </div>
</div>
@endsection
