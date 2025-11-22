<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Mime\Email;

class AuthController extends Controller
{
   public function login(Request $request){
        $email = $request->input('email');
        $senha = $request->input('password');

        // Buscar usuário pelo email
        $usuario = Usuario::where('email', $email)->first();

        if (!$usuario) {
            return redirect()->back()->with('error', 'Email  ou senha errado')->withInput();

        }

        // Verificar senha
        if (!Hash::check($senha, $usuario->senha)) {
            return redirect()->back()->with('error', 'Email  ou senha errado')->withInput();
        }

        // Autenticação bem-sucedida
        // Aqui você pode usar sessions
        session(['usuario_id' => $usuario->id, 'usuario_nome' => $usuario->nome]);

        // Redirecionar para a página inicial ou dashboard
        return redirect()->route('home')->with('success', 'Login realizado com sucesso!');
    }
}
