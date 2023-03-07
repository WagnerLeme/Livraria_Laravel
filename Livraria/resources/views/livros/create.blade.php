@extends('layout')

@section('cabecalho')
    Cadastro Livro
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

<form method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row">
                
                <div class="col col-12">
                    <label for="imagem">Imagem do Livro</label>
                    <input type="file" id="imagem" name="imagem" class="from-control-file">
                </div>

                <div class="col col-2">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control mb-3" name="isbn">
                </div>

                <div class="col col-6">
                    <label for="nome">Nome do livro</label>
                    <input type="text" class="form-control mb-3" name="nome">
                </div>

                <div class="col col-2">
                    <label for="edicao">Edição</label>
                    <input type="text" class="form-control mb-3" name="edicao">
                </div>

                <div class="col col-2">
                    <label for="editora">Editora</label>
                    <input type="text" class="form-control mb-3" name="editora">
                </div>
                
                <div class="col col-6">
                    <label for="autor">Autor</label>
                    <input type="text" class="form-control mb-3" name="autor">
                </div>

                <div class="col col-2">
                    <label for="dataPublicacao">Data de Publicação</label>
                    <input type="date" class="form-control mb-3" name="dataPublicacao">
                </div>

                <div class="col col-4">
                    <label for="idioma">Idioma</label>
                    <input type="text" class="form-control mb-3" name="idioma">
                </div>

                <div class="col col-2">
                    <label for="numeroPagina">Número de Página</label>
                    <input type="number" class="form-control mb-3" name="numeroPagina">
                </div>

                <div class="col col-6">
                <label for="categoria">Categoria</label>
                <select type="text" class="form-select" name="categoria">
                    <option value="" disabled selected">Categoria</option>
                    <option value="Leitura e Comportamento">Leitura e Comportamento</option>
                    <option value="Técnico Profissionais">Técnico Profissionais</option>
                    <option value="Equilíbrio Pessoal">Equilíbrio Pessoal</option>
                </select>
                </div>

                <div class="col col-4">
                    <label for="quantidade">Quantidade</label>
                    <input type="number" class="form-control mb-3" name="quantidade">
                </div>

            </div>
            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
        </form>
    </div>

@endsection
