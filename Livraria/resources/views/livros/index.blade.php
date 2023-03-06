@extends('layout')


@section('cabecalho')
    Livros
@endsection

@section('conteudo')

@auth
    <a href="{{ route('form_criar_serie') }}" class="btn btn-dark mb-3">Adicionar</a>
@endauth

    <a href="/cadastro/livros" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        @foreach($livros as $livro)
            <li class="list-group-item">{{ $livro->nome }}</li>
        @endforeach
    </ul>
@endsection
