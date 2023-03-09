@extends('layout')

@section('cabecalho')
    Atualizar dados do Livro
@endsection

@section('conteudo')

@include('erros', ['erros' => $errors])

<form action="/livros/atualizar/{{ $livro->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                

                <div class="col col-2">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control mb-3" name="isbn" value="{{$livro->isbn}}">
                </div>

                <div class="col col-6">
                    <label for="nome">Nome do livro</label>
                    <input type="text" class="form-control mb-3" name="nome" value="{{$livro->nome}}">
                </div>

                <div class="col col-2">
                    <label for="edicao">Edição</label>
                    <input type="text" class="form-control mb-3" name="edicao" value="{{$livro->edicao}}">
                </div>

                <div class="col col-2">
                    <label for="editora">Editora</label>
                    <input type="text" class="form-control mb-3" name="editora" value="{{$livro->editora}}">
                </div>
                
                <div class="col col-6">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control mb-3" name="autor" value="{{$livro->autor}}">
                </div>

                <div class="col col-2">
                    <label for="dataPublicacao">Data de Publicação</label>
                    <input type="date" class="form-control mb-3" name="dataPublicacao" value="{{$livro->dataPublicacao}}">
                </div>

                <div class="col col-4">
                    <label for="idioma">Idioma</label>
                    <input type="text" class="form-control mb-3" name="idioma" value="{{$livro->idioma}}">
                </div>

                <div class="col col-2">
                    <label for="numeroPagina">Número de Página</label>
                    <input type="number" class="form-control mb-3" name="numeroPagina" value="{{$livro->numeroPagina}}">
                </div>

                <div class="col col-6">
                    <label for="categoria">Categoria</label>
                        <select type="text" class="form-select" name="categoria" value="">
                            <option value="{{$livro->categoria}}" disabled selected">Categoria</option>
                            <option value="Leitura e Comportamento"{{$livro->categoria == "Leitura e Comportamento" ? "selected= 'Leitura e Comportamento'": ""}} >Leitura e Comportamento</option>
                            <option value="Técnico Profissionais" {{$livro->categoria == "Técnico Profissionais" ? "selected= 'Técnico Profissionais'": ""}}>Técnico Profissionais</option>
                            <option value="Equilíbrio Pessoal" {{$livro->categoria == "Equilíbrio Pessoal" ? "selected= 'Equilíbrio Pessoal'": ""}}
                                >Equilíbrio Pessoal</option>  
                        </select>
                </div>

                <div class="col col-4">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" class="form-control mb-3" name="quantidade" value="{{$livro->quantidade}}">
                </div>

            </div>

            <div class="d-grid gap-2 mt-4">
                <button type="submit" class="btn btn-primary btn-block">Atualizar</button>
            </div>
        </form>
    </div>

@endsection
