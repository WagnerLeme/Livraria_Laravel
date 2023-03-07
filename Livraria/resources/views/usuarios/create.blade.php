@extends('layout')

@section('cabecalho')
    Cadastrar Usuário
@endsection

@section('conteudo')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST">
        @csrf

        <div class="container">
            <div class="row">
                <div class="col col-8">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control mb-3" name="nome">
                </div>

                <div class="col col-4">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control mb-3" name="telefone">
                </div>

                <div class="col col-4">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control mb-3" name="email">
                </div>

                <div class="col col-4">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control mb-3" name="endereco">
                </div>
                
                <div class="col col-4">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control mb-3" name="senha">
                </div>

                <div class="col col-12">
                <label for="permissao">Permissão</label>
                <select type="text" class="form-select" name="permissao">
                    <option value="" disabled selected">Permissão</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Padrão">Padrão</option>
                </select>
                </div>

            </div>

            <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </div>
        </form>
    </div>

@endsection