<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredController extends Controller
{

    public function store(Request $request){

        $request->validate([
            'name' => ['required','unique:usuario'],
            'password' => ['required']
        ]);

        $usuario = new User;
        $usuario->name = $request->input('name');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->save();

        session()->flash('status','Usuario registrado');

        return redirect()->route('login')->with('status','Cuenta registrada con éxito');
        
        
    }

}


