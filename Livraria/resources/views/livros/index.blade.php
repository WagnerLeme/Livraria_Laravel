@extends('layout')


@section('cabecalho')
    Livros
@endsection

@section('conteudo')

@if(!empty($mensagem))
    <div class="alert alert-success">
        {{$mensagem}}
    </div>
@endif


    <a href="{{ route('cadastrar_livro') }}" class="btn btn-dark mb-2">Adicionar</a>

    @foreach($livros as $livro)
    <img src="/img/livros/{{$livros->imagem}}" alt="{{$livros->title}}">
    @endforeach
   
    
    <ul class="list-group">
        @foreach($livros as $livro)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $livro->nome}}
               <form method="post" action="/livros/remover/{{$livro->id}}" onsubmit="return confirm('Você tem certeza que deseja excluir o livro {{addslashes($livro->nome)}}')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
               </form>
            </li>
        @endforeach
    </ul>
@endsection
