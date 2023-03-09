<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EntrarController extends Controller
{
    public function index()
    {
        return view('entrar.index');
    }

    public function entrar(Request $request)
    {

        $credenciais = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ],[
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'O email difitado não é valido',
            'password.required' => 'O campo senha é obrigatório!'
        ]);

        if(Auth::attempt($credenciais)){
            $request->session()->regenerate();
            return view('admin.painel');
            //return redirect()->route('listar_livros');
        }
        else {
            return redirect() -> back() ->with('erro', 'Email ou senha inválido. ');
        }


     //  if (!Auth::attempt($request->only(['email', 'password']))){
     //   return redirect()
     //       ->back()
     //       ->withErrors('Usuário e/ou senha incorretos');
     //  }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('pagina_login');
    }

}
