@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <form  method="POST" action="{{route('registro.update', $registro->id)}}" accept-charset="UTF-8" role="form" enctype="multipart/form-data" autocomplete="off">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="row">
                <div class="col-md-6">
                    <label for="cedula">Cedula</label> 
                    <input type="text" class="form-control" name="cedula" id="cedula" value="{{$registro->cedula}}">
                </div>

                <div class="col-md-6">
                    <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                    <input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" value="{{$registro->fecha_nacimiento}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$registro->nombre}}">
                </div>
    
                <div class="col-md-6">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido" value="{{$registro->apellido}}">
                </div>

            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" name="direccion" id="direccion" value="{{$registro->direccion}}">
                </div>
    
                <div class="col-md-6">
                    <label for="telefono">Telefono</label>
                    <input type="number" class="form-control" name="telefono" id="telefono" value="{{$registro->telefono}}">
                </div>

            </div>


            <div class="row">

                <div class="col-md-6">
                    <label for="departamento">Departamento</label>
                    <input type="text" class="form-control" name="departamento" id="departamento" value="{{$registro->departamento}}">
                </div>
    
                <div class="col-md-6">
                    <label for="municipio">Municipio</label>
                    <input type="text" class="form-control" name="municipio" id="municipio" value="{{$registro->municipio}}">
                </div>
                
            </div>


            <div class="row">
                <div class="col-md-12">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{$registro->email}}" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="row">
                
                <div class="col-md-6">
                    <label for="departamento">Estado</label>
                    <select name="status" id="status" class="form-control">
                        <option disabled selected>Seleccione un Rol</option>
                            <option value="0" @if($registro->status == 0) selected="selected"  @endif>En Proceso</option>
                            <option value="1" @if($registro->status == 1) selected="selected"  @endif>Listo para recoger</option>
                    </select>
                </div>
    
                <div class="col-md-6">
                    <label for="municipio">DPI</label>
                    <input type="text" class="form-control" name="dpi" id="dpi" value="{{$registro->dpi}}">
                </div>
                
            </div>

            <br>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        </div>
    </div>
</div>
@endsection
