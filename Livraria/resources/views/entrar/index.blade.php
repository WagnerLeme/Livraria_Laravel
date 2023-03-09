@extends('layout')

@section('cabecalho')
    Entrar
@endsection

@section('conteudo')

    @if($mensagem = Session::get('erro'))
        {{$mensagem}}
    @endif

    @include('erros', ['erros' => $errors])

    <form method="post">
        @csrf
        <div class="form-group">
            <label for="email">E-mail</label>
       <input type="email" name="email" id="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" min="1" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary mt-3">
            Entrar
        </button>

        <a href="/registrar" class="btn btn-secondary mt-3">
            Registrar-se
        </a>
    </form>
@endsection