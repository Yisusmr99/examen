@extends('layouts.app')

@section('content')
<div class="container">

    <div class="box-header with-border">
        <a href="{{ route('registro.create')}}" class="btn btn-primary pull-right">Agregar Registro</a>
    </div>
    <br>
    <div class="box-body">
            <table  class="dataTaableStandar1 table table-bordered dt-responsive table-hover" style="width:100%">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Cedula</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Departamento</th>
                    <th scope="col">Municipio</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">DPI</th>
                    @if (Auth::user()->idRol == 1)
                        <th scope="col">Cambiar estado</th>
                    @endif
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($tramites as $tramite)
                        <th scope="row">{{$tramite->id}}</th>
                        <td>{{$tramite->cedula}}</td>
                        <td>{{$tramite->fecha_nacimiento}}</td>
                        <td>{{$tramite->nombre}}</td>
                        <td>{{$tramite->apellido}}</td>
                        <td>{{$tramite->direccion}}</td>
                        <td>{{$tramite->telefono}}</td>
                        <td>{{$tramite->departamento}}</td>
                        <td>{{$tramite->municipio}}</td>
                        <td>{{$tramite->email}}</td>
                        <td>
                            @if ($tramite->status == 0)
                                En Proceso
                            @else 
                                Listo para recoger
                            @endif
                        </td>
                        <td>{{$tramite->dpi}}</td>
                        @if (Auth::user()->idRol == 1)
                            <td>
                                <a href="{{ route('registro.edit', $tramite->id) }}" class="btn btn-warning">Editar</a>
                            </td>
                        @endif
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
    </div>
</div>
@endsection
