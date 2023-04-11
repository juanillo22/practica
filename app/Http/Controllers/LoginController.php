<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{

    public function store(Request $request)
    {
        $credentials = $request->validate([
             'email' => ['required'],
             'password' => ['required']
         ]);
         
         if (! Auth::attempt($credentials, $request->boolean('remember'))){
             throw ValidationException::withMessages([
                'email' => __('auth.failed')
             ]);
         }
            
            $request->session()->regenerate();
            return redirect()->intended()->with('status','Logeado con éxito');
             
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('status','Sesion cerrada con éxito');
    }

}
