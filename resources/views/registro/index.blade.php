@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('registro.store')}}" class="btn btn-primary pull-right">Agregar Registro</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @foreach($tramites as $tramite)
                        <th scope="row">$tramite->id</th>
                        <td>$tramite->id</td>
                        <td>$tramite->id</td>
                        <td>$tramite->id</td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
