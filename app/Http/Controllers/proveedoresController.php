<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\proveedores;



class proveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tableproveedores  = proveedores::all();
   
        return view('proveedores.index', ["tableproveedores" =>  $tableproveedores ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       $tableproveedores = proveedores ::orderBy('nombre')->get()->pluck('nombre','empresa','telefono','email','id');
        return view('proveedores.create',[ 'tableproveedores ' => $tableproveedores  ]);
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
            'empresa' => 'required|min:5|max:200',
           'telefono' => 'required|numeric|min:0',
            'correo' => 'required|min:5|max:200'
            
        ]);
 
        $mproveedores = new proveedores($request->all());
        
        $mproveedores->save();

        // Regresa a lista de productos
        Session::flash('message', 'Proveedor Agregado!');
        return Redirect::to('proveedores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
       $modelo = proveedores::find($id);
        return view('proveedores.show', ["modelo" => $modelo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo = proveedores::find($id);
        $tableproveedores = proveedores::orderBy('nombre')->get()->pluck('nombre','empresa','telefono','email','id');
        return view('proveedores.edit', ["modelo" => $modelo, "tableproveedores"=>$tableproveedores]);
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
            'empresa' => 'required|min:5|max:200',
            'telefono' => 'required|numeric|min:0',
             'correo' => 'required|min:5|max:200'
            
        ]);

        $mproveedores = proveedores::find($id);
        $mproveedores->fill($request->all());
        

        $mproveedores->save();

        Session::flash('message', 'Proveedor Actualizado!');
        return Redirect::to('proveedores');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mproveedores = proveedores::find($id);
        $mproveedores->delete();
        Session::flash('message', 'Proveedor Eliminado!');
        return Redirect::to('proveedores');
    }
}
