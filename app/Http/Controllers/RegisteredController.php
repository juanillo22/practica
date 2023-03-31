<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredController extends Controller
{

    public function store(Request $request){

        $request->validate([
            'name' => ['required'],
            'pass' => ['required']
        ]);

        $usuario = new Usuario;
        $usuario->name = $request->input('name');
        $usuario->pass = $request->input('pass');
        $usuario->save();


        session()->flash('status','Usuario registrado');

        return redirect()->route('posts.index');
        
        
        // $credentials = $request->validate([
        //     'name' => ['required'],
        //     'pass' => ['required']
        // ]);
        
        // if (Auth::attempt($credentials)){

        // }
    }

}


