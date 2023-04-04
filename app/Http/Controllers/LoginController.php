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
             'pass' => ['required']
         ]);
         
         if ( ! Auth::attempt($credentials, $request->boolean('remember')) ){
            throw ValidationException::withMessages([
                'name' => __('auth.failed')
            ]);
         }

         $request->session()->regenerate();
         return redirect()->intended();     
    }

}




