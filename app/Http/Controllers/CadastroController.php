<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastro(Request $request){
        $nome = $request->input('name');
        $email = $request->input('email');
        $senha = $request->input('password');
        $telefone = $request->input('phone');
        $dataNascimento = $request->input('birthdate');

        if(!$this->validarDados($nome, $email, $senha, $telefone, $dataNascimento)){
            return response()->json(['error' => 'Dados inválidos'], 400);
        }

        Usuario::create([
            'nome' => $nome,
            'email' => $email,
            'senha' => bcrypt($senha),
            'telefone' => $telefone,
            'data_nascimento' => $dataNascimento,
            'role_id' => 1, 
        ]);

        return redirect()->route('login.form')->with('success', 'Cadastro realizado com sucesso. Faça login!');


    }



    private function validarDados($nome, $email, $senha, $telefone, $dataNascimento){
        if(empty($nome) || empty($email) || empty($senha) || empty($telefone) || empty($dataNascimento)){
            return false;
        }
        return true; 
    }
    
}
