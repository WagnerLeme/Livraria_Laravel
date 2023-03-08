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


    <a href="{{ route('cadastrar_livro') }}" class="btn btn-dark mb-2" >Adicionar</a>
   
    <div class="container">
        
        <table class="table container">
            <thead>
                <tr class="table-primary">
                    <th scope="col">IMAGEM</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">NOME DO LIVRO</th>
                    <th scope="col">EDIÇÃO</th>
                    <th scope="col">EDITORA</th>
                    <th scope="col">AUTOR</th>
                    <th scope="col">DATA PUBLICACAO</th>
                    <th scope="col">IDIOMA</th>
                    <th scope="col">N PAGINA</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">QUANTIDADE</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($livros as $livro)

                @php
                    $dados = $livro->imagem;
                    $caminhoImagem = json_decode($dados, true)['imagem'];
                @endphp

                

                    <tr>
                        <td>
                            <img src="imagem/{{ $caminhoImagem }}" alt="">
                        </td>
                        <td>{{ $livro->isbn}}</td>
                        <td>{{ $livro->nome}}</td>
                        <td>{{ $livro->edicao}}</td>
                        <td>{{ $livro->editora}}</td>
                        <td>{{ $livro->autor}}</td>
                        <td>{{ $livro->dataPublicacao}}</td>
                        <td>{{ $livro->idioma}}</td>
                        <td>{{ $livro->numeroPagina}}</td>
                        <td>{{ $livro->categoria}}</td>
                        <td>{{ $livro->quantidade}}</td>
                        <td>
                            <form method="post" action="/livros/remover/{{$livro->id}}" onsubmit="return confirm('Você tem certeza que deseja excluir o livro {{addslashes($livro->nome)}}')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
    
                    @endforeach
            </tbody>

        </table>
    </div>
   

@endsection
