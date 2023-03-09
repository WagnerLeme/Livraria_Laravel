@extends('layout')


@section('cabecalho')
    Usuários
@endsection

@section('conteudo')

@include('erros', ['erros' => $errors])

    
<table class="table">
    <thead>
        <tr class="table-primary">
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">TELEFONE </th>
            <th scope="col">EMAIL</th>
            <th scope="col">ENDEREÇO</th>
            <th scope="col">PERMISSÃO</th>
            <th scope="col">OPÇÕES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->id}}</td>
                <td>{{ $usuario->nome}}</td>
                <td>{{ $usuario->telefone}}</td>
                <td>{{ $usuario->email}}</td>
                <td>{{ $usuario->endereco}}</td>
                <td>{{ $usuario->permissao}}</td>
                <td>
                    
                <span class="d-flex">
                    <a href="{{ route('cadastrar_usuarios') }}" class="btn btn-dark btn-sm m-1">
                        <i class="fa-solid fa-plus"></i>
                    </a>
                    <a href="/usuarios/editar/{{$usuario->id}}" class="btn btn-info btn-sm m-1">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form method="post" action="/usuarios/remover/{{$usuario->id}}" onsubmit="return confirm('Você tem certeza que deseja excluir o usuário {{addslashes($usuario->nome)}}')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm m-1"><i class="fa-solid fa-trash"></i></button>
                    </form>
                </span>

                </td>
            </tr>
            @endforeach
    </tbody>
</table>

@endsection