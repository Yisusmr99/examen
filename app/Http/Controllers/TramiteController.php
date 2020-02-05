<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tramite;
use App\User;

class TramiteController extends Controller
{

    public function index(){

        if (Auth::user()->idRol == 1){
            $tramites = Tramite::all();
            return view('registro.index', compact('tramites'));
        }else {
            $tramites = Tramite::where('idUsuario', '=', Auth::user()->id)->get();
            return view('registro.index', compact('tramites'));
        }
       
    }

    public function create(){
        return view('registro.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'cedula'            => 'sometimes|required',
            'fecha_nacimiento'  => 'required',
            'nombre'            => 'required',
            'apellido'          => 'required',
            'direccion'         => 'required',
            'telefono'          => 'required',
            'departamento'      => 'required',
            'municipio'         => 'required',
            'email'             => 'required|email|unique:users,email',
        ]);


        $usuario                = new User();
        $usuario->name          = $request->nombre;
        $usuario->email         = $request->email;
        $usuario->password      = bcrypt('password');
        $usuario->idRol         = '0';
        $usuario->save();

        $registro               = new Tramite($request->except('_token'));
        $registro->status       = '0';
        $registro->dpi          = mt_rand(100000,999999);
        $registro->idUsuario    = $usuario->id;
        $registro->save();
        session()->flash('success', 'El registro se creo correctamente');

        return redirect()->route('registro.index');

    }

    public function edit($id){
        $registro = Tramite::find($id);
        return view('registro.edit',compact('registro'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cedula'            => 'sometimes|required',
            'fecha_nacimiento'  => 'required',
            'nombre'            => 'required',
            'apellido'          => 'required',
            'direccion'         => 'required',
            'telefono'          => 'required',
            'departamento'      => 'required',
            'municipio'         => 'required',
            'email'             => 'required|email|unique:users,email',
            'status'            => 'required',
            'dpi'               => 'required',
        ]);

        $data = $request->except('_token');    
        $registro                       = Tramite::find($id);
        $registro->cedula               = $request->cedula;
        $registro->fecha_nacimiento     = $request->fecha_nacimiento;
        $registro->nombre               = $request->nombre;
        $registro->apellido             = $request->apellido;
        $registro->direccion            = $request->direccion;
        $registro->telefono             = $request->telefono;
        $registro->departamento         = $request->departamento;
        $registro->municipio            = $request->municipio;
        $registro->email                = $request->email;
        $registro->status               = $request->status;
        $registro->dpi                  = $request->dpi;

        $registro->update();

        session()->flash('success', 'El tipo de usuario se actualizo correctamente');
        return redirect()->route('registro.index');
        
    }
}
