<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserController extends Controller
{
    public function store(Request $request)
    {
        
        $usuario = new User;
        $usuario->username=$request->get('username');
        $usuario->password=bcrypt($request->get('password'));
        $usuario->tipo=$request->get('tipo');
        $usuario->save(); 

        return view('usuarios.create');  
    }
}
