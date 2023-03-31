<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class LoginController extends Controller
{

    public function store(Request $request)
    {
        $credentials = $request->validate([
             'name' => ['required'],
             'pass' => ['required']
         ]);
        
         
         if ( ! Auth::attempt($credentials, $request->boolean('remember'))){
            throw ValidationValidationException::withMessages([
                'name' => ('auth.failed')
            ]);
         }
         $request->session()->regenerate();
         return redirect()->intended();     
    }

}




