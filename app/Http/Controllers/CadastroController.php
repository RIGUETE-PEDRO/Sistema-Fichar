<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastro(Request $request){
        $nome = $request->input('name');
        $email = $request->input('email');
        $senha = $request->input('password');
        $telefone = $request->input('phone');
        $dataNascimento = $request->input('birthdate');


        

    }
    private function validarDados($nome, $email, $senha, $telefone, $dataNascimento){
        if(empty($nome) || empty($email) || empty($senha) || empty($telefone) || empty($dataNascimento)){
            return false;
        }
        
    }
    
}
