<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Exibir o formulário de login
    public function showLoginForm()
    {
        return view('auth.login'); // A view deve estar em resources/views/auth/login.blade.php
    }

    // Processar o login
    public function login(Request $request)
    {
        // Validar os dados de entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Tentar autenticar o usuário
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Autenticação bem-sucedida, redirecionar para a dashboard
            return redirect()->intended('dashboard')->with('success', 'Login realizado com sucesso!');
        }

        // Se a autenticação falhar, redirecionar de volta com um erro
        return back()->withErrors([
            'email' => 'As credenciais fornecidas estão incorretas.',
        ]);
    }

    // Processar o logout
    public function logout(Request $request)
    {
        Auth::logout(); // Fazer logout do usuário
        return redirect('/login')->with('success', 'Logout realizado com sucesso!');
    }
}
