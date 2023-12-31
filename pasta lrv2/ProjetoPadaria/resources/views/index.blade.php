<!doctype html>
<html lang="pt">
    <head>

        <?php use App\Http\Controllers\ProdutoController; ?>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous">
        <link rel="stylesheet" href="./css/index.css">

        <title>Padaria Camargo</title>
        <br>
    </head>

    <body>
    <header class="cabecalho">
        <h1>Padaria Camargo</h1>
        <!-- <div class="container"> -->
            
            <nav>
                <ul>
                    <li><a href="produto-pag">Teste</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Fale conosco</a></li>
                    <li><a href="#">Cadastre-se</a></li>
                </ul>
            </nav>
        <!-- </div> -->
    </header>
        <!-- <div class="container"> -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="height:40em">
                <div
                    class="carousel-item active"
                    style="background-image: url('./img/img1.png');"></div>

                <div class="carousel-item" style="background-image: url('./img/img2.png');"></div>

                <div class="carousel-item" style="background-image: url('./img/img3.png');"></div>

            </div>

            <a
                class="carousel-control-prev"
                href="#carouselExampleIndicators"
                role="button"
                data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a
                class="carousel-control-next"
                href="#carouselExampleIndicators"
                role="button"
                data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <br>
            <br>
            <br>
            <br>

        </div>
        <!-- </div> -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
            <div id="overlay"></div>
    <div class="container">
        @foreach($produtos as $p)
        <div class="imagem-container">
            <img src="img/fotos/{{$p->img}}" alt="Imagem {{$p->idProduto}}" class="imagem-produto-fora">
            <div id="div-produto-{{$p->idProduto}}" class="div-produto">
                <img src="img/fotos/{{$p->img}}" alt="Imagem {{$p->idProduto}}" class="imagem-produto-dentro">
                <br>
                <a href="/produto/escolhido/{{$p->idProduto}}" class="titulo"> {{$p->produto}}</a>
                <br>
                <div class="desc">{{$p->descProduto}}</div>
                <br>
                <div class="valor">Preço: {{$p->valorProduto}} R$</div>
                <br>
                <div class="datavalidade">Data de Validade: {{$p->dataValidade}}</div>
            </div>  
        </div>
        @endforeach
    </div>
         
                <script src="./js/script.js"></script>

                <footer></footer>
    </body>
</html>

<!-- <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta
name="viewport" content="width=device-width, initial-scale=1.0"> <link
rel="stylesheet" href="../css/index.css"> <title>Document</title> </head> <body>
-->

<!-- </body> </html> -->