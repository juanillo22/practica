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
             'name' => ['required'],
             'password' => ['required']
         ]);
         
         
         if (! Auth::attempt($credentials, $request->boolean('remember'))){
             throw ValidationException::withMessages([
                'name' => __('auth.failed')
             ]);
         }else {
            $request->session()->regenerate();
            return redirect()->route('posts.index')->with('status','Logeado con éxito');
         }

    }

}




