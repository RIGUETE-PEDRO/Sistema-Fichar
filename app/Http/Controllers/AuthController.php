<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $email = $request->input('email');
        $senha = $request->input('password');

        return "Email recebido:$email | senha recebida: $senha";
    }
}
