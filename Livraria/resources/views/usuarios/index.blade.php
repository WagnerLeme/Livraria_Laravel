@extends('layout')


@section('cabecalho')
    Usuários
@endsection

@section('conteudo')
@if(!empty($mensagem))
    <div class="alert alert-success">
        {{$mensagem}}
    </div>
@endif

        <section class="tabela">
            <h3 class="center">Lista de usuários</h3>
                <table class="centered bordered">
                    <thead>
                    <tr>
                        <th>NOME</th>
                        <th>TELEFONE</th>
                        <th>EMAIL</th>
                        <th>ENDEREÇO</th>
                        <th>PERMISSÃO</th>
                        <th>OPÇÃO</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </section>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>

        function insereTabela() {
            var corpoTabela = $(".tabela").find("tbody");

            var linha = novaLinha(usuario, numPalavras);
            linha.find(".botao-remover").click(removeLinha);

            corpoTabela.append(linha);
            $(".placar").slideDown(500);
            scrollPlacar();
        }

        function novaLinha(usuario, palavras) {
            var linha = $("<tr>");
            var colunaUsuario = $("<td>").text(usuario);
            var colunaPalavras = $("<td>").text(palavras);
            var colunaRemover = $("<td>");

            var link = $("<a>").addClass("botao-remover").attr("href", "#");
            var icone = $("<i>").addClass("small").addClass("material-icons").text("delete");

            link.append(icone);

            colunaRemover.append(link);

            linha.append(colunaUsuario);
            linha.append(colunaPalavras);
            linha.append(colunaRemover);

            return linha;
        }
        </script>



    <a href="{{ route('cadastrar_usuarios') }}" class="btn btn-dark mb-2">Adicionar</a>

    <!--Salvar    <ul class="list-group">
        @foreach($usuarios as $usuario)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $usuario->nome}}
               <form method="post" action="/usuarios/remover/{{$usuario->id}}" onsubmit="return confirm('Você tem certeza que deseja excluir o usuário {{addslashes($usuario->nome)}}')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
               </form>
            </li>
        @endforeach
    </ul>

    -->

@endsection