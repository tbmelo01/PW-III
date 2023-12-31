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
            <link rel="stylesheet" href="./js/footer.js">
            <!-- <link rel="stylesheet" href="./css/produto-pag.css"> -->
            
        <title>Padaria Camargo</title>
        <br>
    </head>

    <body>
    <header class="cabecalho">
        <h1>Padaria Camargo</h1>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="#">            <button> Página Inicial </button>   </a></li>
                    <li><a href="#">            <button> Menu           </button>   </a></li>
                    <li><a href="/grafico">     <button> Sobre Nós      </button>   </a></li>
                    <li><a href="#">            <button> Contato        </button>   </a></li>
                    <li><a href="/produto-pag"> <button> Login          </button>   </a></li>

                </ul>
            </nav>
        </div>
    </header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" style="height:40em">
                <div class="carousel-item active"style="background-image: url('./img/carrossel/foto2.jpg');"></div>
                <div class="carousel-item" style="background-image: url('./img/carrossel/foto1.jpg');"></div>
                <div class="carousel-item" style="background-image: url('./img/carrossel/foto3.avif');"></div>
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
        </div>

        <br>
        <!-- </div> -->
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous">
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous">
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous">
        </script>

            <br>
                <h1 class="titulo-index">Produtos</h1>
            <br>

            <div id="overlay"></div>

        <div class="container-produtos">
            
    
             @foreach($produtos as $p)
            
                <div class="imagem-container">

                    <img src="img/fotos/{{$p->img}}" alt="Imagem {{$p->idProduto}}" class="imagem-produto-fora">
                    
                    <div id="div-produto-{{$p->idProduto}}" class="div-produto">

                        <a href="/produto/escolhido/{{$p->idProduto}}"> <img src="img/fotos/{{$p->img}}" alt="Imagem {{$p->idProduto}}" class="imagem-produto-dentro"></a>

                        <br>

                        <div class="titulo"> {{$p->produto}}</div>

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
    <script src="./js/footer.js"></script>

    <footer>
    <hr>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!-- Adicionando Javascript -->

        <!-- Inicio do formulario -->
        <form class="formula" method="get" action=".">
        
            <div  class="container" >

            

              

                <h1> <strong> Descubra o Seu Endereço </strong> </h1>
               
                <br><br><br><br>

                <div>
                    <label class="labe"> <h4> Cep: </h4> 
                </div>

                <div>
                    <input class="insere" name="cep" type="text" id="cep" value="" size="10" maxlength="9"
                        onblur="pesquisacep(this.value);" /></label><br />
                </div>

                <div>
                    <label class="labe" > <h4> Rua: </h4>
                </div>
                
                <div>
                    <input class="insere" name="rua" type="text" id="rua" size="60" /></label><br />
                </div>

                <div>
                    <label class="labe" > <h4> Bairro: </h4>
                </div>

                <div>
                    <input class="insere" name="bairro" type="text" id="bairro" size="40" /></label><br />
                </div>

                <div>
                    <label class="labe" > <h4> Cidade: </h4>
                </div>

                <div>
                    <input class="insere" name="cidade" type="text" id="cidade" size="40" /></label><br />
                </div>

                <div>
                    <label class="labe" > <h4> Estado: </h4>
                </div>

                <div>
                    <input class="insere" name="uf" type="text" id="uf" size="2" /></label><br />
                </div>

                <div>
                    <label class="labe" > <h4> IBGE: </h4>
                </div>

                <div>
                    <input class="insere" name="ibge" type="text" id="ibge" size="8" /></label><br />
                </div>
            </div>
                
        </form>


        <form action="/login" method="post">
        {{ csrf_field() }}
        <div>
            <input type="text" name="email" value="maria@gmail.com" />            
        </div>

        <div>
            <input type="text" name="password" value="123456" />            
        </div>

        <div>
            <input type="submit" value="Login" />
        </div>  
    </form>

    </footer>

</html>

<!-- <!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta
name="viewport" content="width=device-width, initial-scale=1.0"> <link
rel="stylesheet" href="../css/index.css"> <title>Document</title> </head> <body>
-->

<!-- </body> </html> -->