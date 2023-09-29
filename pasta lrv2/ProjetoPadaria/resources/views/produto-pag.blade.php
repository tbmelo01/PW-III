<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="../css/produto-pag.css">
        <title>Produtos</title>
    </head>
        <body>
            <div class="container">
                <h1>Cadastro de Produtos</h1>
                <br>
                <br>
                <form class="formula" method="post" action="/produto-pag" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <input type="text" placeholder= "Nome"name="txProduto" />
                    <input type="text" placeholder= "Descrição"name="txDesc" />
                    <input type="number" placeholder= "Valor" name="txValor" step="0.01" inputmode="decimal" />
                    <input type="date" name="txData" />

                    <input type="file" id="image" name="image" class="form-control-file">
                
                    <input type="submit" value="Salvar" />
                </form>
                <br>
                    <h1>Produtos</h1>
                    <table class="table">
                <tr>
                    <th class="campos" scope="col">Nome:</th><br>
                    <th class="campos" scope="col">Descrição:</th><br>
                    <th class="campos" scope="col">Valor:</th><br>
                    <th class="campos" scope="col">Data de Validade:</th><br>
                </tr>

                @foreach($produtos as $p)
                <tr>
                    <td class="sc">{{$p->produto}}</td>
                    <td class="sc">{{$p->descProduto}}</td>
                    <td class="sc">{{$p->valorProduto}}</td>
                    <td class="sc">{{$p->dataValidade}}</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <a href="/produto/excluir/{{$p->idProduto}}">Excluir</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>