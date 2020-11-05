<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\clientes;



class clientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $tableclientes  = clientes::all();
   
        return view('clientes.index', ["tableclientes" =>  $tableclientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $tableclientes = clientes ::orderBy('nombre')->get()->pluck('nombre','edad','fechaingreso','telefono','regimen','email','id');
        return view('clientes.create',[ 'tableclientes ' => $tableclientes  ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:100',
            'edad' => 'required|min:2|max:200',
            'fechaingreso' => 'required|min:5|max:200',
            'telefono' => 'required|min:5|max:200',
            'regimen' => 'required|min:5|max:200',
            'email' => 'required|min:5|max:200'
            
        ]);
 
        $mclientes= new clientes($request->all());
        
        $mclientes->save();

        // Regresa a lista de productos
        Session::flash('message', 'Cliente Agregado!');
        return Redirect::to('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = clientes::find($id);
        return view('clientes.show', ["modelo" => $modelo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $modelo = clientes::find($id);
        $tableclientes = clientes::orderBy('nombre')->get()->pluck('nombre','edad','fechaingreso','telefono','regimen','email','id');
        return view('clientes.edit', ["modelo" => $modelo, "tableclientes"=>$tableclientes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|min:5|max:100',
            'edad' => 'required|min:2|max:200',
             'fechaingreso' => 'required|min:5|max:200',
              'telefono' => 'required|min:5|max:200',
               'regimen' => 'required|min:5|max:200',
               'correo' => 'required|min:5|max:200'
            
        ]);

        $mclientes = clientes::find($id);
        $mclientes->fill($request->all());
        

        $mclientes->save();

        Session::flash('message', 'Datos de Cliente Actualizados!');
        return Redirect::to('clientes');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $mclientes = clientes::find($id);
        $mclientes->delete();
        Session::flash('message', 'Cliente Eliminado!');
        return Redirect::to('clientes');
    }
}
