<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;
use App\Http\Requests\UsuarioFormRequest;
use App\Services\CriadorDeUsuario;


class PessoaController extends Controller
{
    public function index(Request $request)
    {
        $usuarios = Pessoa::query() -> orderBy('nome') -> get();

        $mensagem = $request -> session() -> get('mensagem');

        return view('usuarios.index', compact('usuarios', 'mensagem'));

    }
    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {

        $usuario = Pessoa::create([
            
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'email' => $request->email,
            'endereco' => $request->endereco,
            'senha' => bcrypt($request->telefone),
            'permissao' => $request->permissao,


            $request->all()]);
        $request->session() -> flash ('mensagem',"Usuario {$usuario->nome} foi cadastrado com sucesso.");
    
       return redirect()->route('listar_usuarios');
    }

    public function destroy(Request $request)
    {
        Pessoa::destroy($request->id);
        $request->session() -> flash('mensagem', "O usuário foi removido com sucesso");

        return redirect()->route('listar_usuarios');
    }
}
