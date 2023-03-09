@extends('layout')

@section('cabecalho')
    Editar Usuário
@endsection

@section('conteudo')

@include('erros', ['erros' => $errors])

<form action="/usuarios/atualizar/{{ $usuario->id }}" method="POST">
        @csrf

        <div class="container">
            <div class="row">
                
                <div class="col col-8">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control mb-3" name="nome" value="{{$usuario->nome}}">
                </div>

                <div class="col col-4">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control mb-3" name="telefone" value="{{$usuario->telefone}}">
                </div>

                <div class="col col-4">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control mb-3" name="email" value="{{$usuario->email}}">
                </div>

                <div class="col col-4">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control mb-3" name="endereco" value="{{$usuario->endereco}}">
                </div>
                
                <div class="col col-4">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control mb-3" name="senha" required placeholder="Digite uma nova senha">
                </div>

                <div class="col col-12">
                <label for="permissao">Permissão</label>
                <select type="text" class="form-select" name="permissao" required>
                    <option value="" disabled selected">Permissão</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Padrão" {{$usuario->permissao == "Padrão" ? "selected= 'Padrão'":"Administrador" }}>Padrão</option>
                </select>
                </div>

            </div>

            <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-primary btn-block">Atualizar</button>
            </div>
        </form>
    </div>

@endsection