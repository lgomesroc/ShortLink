<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Mostra o formulário de login
    public function showLoginForm()
    {
        return view('auth.login'); // A view que você criou anteriormente
    }

    // Faz o login do usuário
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tenta autenticar o usuário
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Redireciona para a página inicial
            return redirect()->route('home')->with('success', 'Você está logado!');
        }

        // Se falhar, redireciona de volta com erro
        return redirect()->back()->withErrors(['email' => 'As credenciais não coincidem.']);
    }

    // Faz o logout do usuário
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Você saiu com sucesso.');
    }
}
