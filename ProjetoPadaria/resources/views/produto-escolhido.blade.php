<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php use App\Http\Controllers\ProdutoController; ?>

    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
            <link rel="stylesheet" href="../../css/produto-escolhido.css">
            
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
    </style>
</head>
<body>
<div class="container-produtos">

    @foreach($produtos as $p)


        <div class="div-produto">
            <img src="../../img/fotos/{{$p->img}}" style="width:500px; height:auto; border-radius: 20px;">
            <br>
            <br>
            <div class="titulo"> {{$p->produto}}</div>
            <br>
            <div class="desc">{{$p->descProduto}}</div>
            <br>
            <div class="valor">Preço: {{$p->valorProduto}} R$</div>
            <br>
            <div class="datavalidade">Data de Validade: {{$p->dataValidade}}</div>
        </div>
    @endforeach

</div>
</body>
</html>