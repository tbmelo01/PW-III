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
    </head>

    <body>

        <header class="cabecalho">
            <h1>Padaria Camargo</h1>
            <nav>
                <a href="produto-pag">
                    <li>Teste</li>
                </a>
                <a href="#">
                    <li>Login</li>
                </a>
                <a href="#">
                    <li>Fale conosco</li>
                </a>
                <a href="#">
                    <li>Cadastre-se</li>
                </a>
            </nav>
            <br>
            <br>
            <br>
            <br>
        </header>
        <!-- <div class="container"> -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="height:60em">
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

        <div class="container">
                        @foreach($produtos as $p)
                        <div class="div-produto">
                            <img src="img/fotos/{{$p->img}}">
                            <br>
                            <a href="/produto/escolhido/{{$p->idProduto}}" class="titulo"> {{$p->produto}}</a>
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

<!-- <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta
name="viewport" content="width=device-width, initial-scale=1.0"> <link
rel="stylesheet" href="../css/index.css"> <title>Document</title> </head> <body>
-->

<!-- </body> </html> -->