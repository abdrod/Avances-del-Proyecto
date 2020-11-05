<?php

namespace App\Http\Controllers;

use Session;
Use Redirect;
use Illuminate\Http\Request;
use App\Models\UserEloquent;
use App\Models\roles;


class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        $tableUsers = UserEloquent::all();
        return view('users.index', ["tableUsers" =>  $tableUsers ]);
    }

    public function create()
    {
        $tableroles = roles::orderBy('nombre')->get()->pluck('nombre','id');
        return view('users.create',['tableroles' => $tableroles]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|min:5|max:10',
            'password' => 'required|min:5|max:10',
            // 'email' => 'required|email|unique:users', // <-consulta a la bd
            'email' => 'required|email',
        ]);

        $usrExistente = UserEloquent::where('email', $request->email)->first(); 
        
        if($usrExistente){
            return Redirect()->route('users.create')->withErrors(['email' => 'Mi error'])->withInput();
        }

        $mUser = new UserEloquent();
        $mUser->fill($request->all());
        $mUser->password = bcrypt($mUser->password);
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Usuario creado!');
        return Redirect::to('users');
    }


    public function show($id)
    {
        $mUser = UserEloquent::find($id);
        return view('users.show', ["modelo" => $mUser]);
    }

    public function edit($id)
    {
        $mUser = UserEloquent::find($id);
        return view('users.edit', ["modelo" => $mUser]);
    }

    public function update($id, Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:10',
            'password' => 'min:5|max:10',
            'email' => 'required|email',
        ]);

        $mUser = UserEloquent::find($id);
        $mUser->name       = $request->name;
        $mUser->email      = $request->email;
        $mUser->updated_at = date('Y-m-d H:i:s');
        if($request->password != '*****'){
            $mUser->password = bcrypt($request->password);
        }
        $mUser->save();

        // Regresa a lista de usuario
        Session::flash('message', 'Usuario actualizado!');
        return Redirect::to('users');
    }


    public function destroy($id)
    {
        $mUser = UserEloquent::find($id);
        $mUser->delete();

        Session::flash('message', 'Usuario eliminado!');
        return Redirect::to('users');
    }


}
