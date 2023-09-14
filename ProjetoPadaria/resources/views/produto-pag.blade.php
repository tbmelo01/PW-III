<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" href="../css/index.css">
        <title>Produtos</title>
    </head>
    <body>
    <h1><b>Cadastro</b></h1>
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

        <h1><b>Produtos</b></h1> <br>
        <table class="table table-bordered border-primary">

            <tr>
                <th class="campos" scope="col">Nome:</th><br>
                <th class="campos" scope="col">Descrição:</th><br>
                <th class="campos" scope="col">Valor:</th><br>
                <th class="campos" php artisanscope="col">Data de Validade:</th><br><br>
            </tr>
            @foreach($produtos as $p)

            <tr>
                <td  class="sc" >{{$p->produto}}</td>
                <td  class="sc" >{{$p->descProduto}}</td>
                <td  class="sc" >{{$p->valorProduto}}</td>
                <td  class="sc" >{{$p->dataValidade}}</td>
                <td  class="sc" ><img src="img/fotos/{{$p->img}}"></td>
            </tr>
            
            @endforeach

        </table>
    </body>
</html>