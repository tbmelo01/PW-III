<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>

        <h1> Contatos existentes </h1>

        <form method="post" action="/contato">

            {{ csrf_field() }}

            <input type="text" name="txNome" placeholder="Nome"/>
            <input type="text" name="txEmail" placeholder="Email"/>
            <input type="text" name="txAssunto" placeholder="Assunto"/>
            <input type="text" name="txMensagem" placeholder="Menssagem"/>

            <input type="submit" value="Salvar" />
            <br> <br>
        </form>
        
        <table class="table table-dark table-hover">
            <thead>
            <tr>

                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Assunto</th>
                <th>Menssagem</th>

            </tr>
            </thead>
            <tbody>
                @foreach($contatos as $c)
                    <tr>
                        <td>{{$c->idContato}}</td>
                        <td>{{$c->nome}}</td>
                        <td>{{$c->email}}</td>
                        <td>{{$c->assunto}}</td>
                        <td>{{$c->mensagem}}</td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
       
    </body>
</html>