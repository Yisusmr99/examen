<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tramite;

class TramiteController extends Controller
{

    public function index(){
        $tramites = Tramite::All();
        return view('registro.index', compact(`tramites`));
    }

    public function store(){
        return view('registro.create');
    }

    public function create(Request $request)
    {
        dd($request->all());
    }
}
