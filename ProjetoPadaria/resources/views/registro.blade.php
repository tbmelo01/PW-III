<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
<form
 class="formula" method="post" action="/registro" enctype="multipart/form-data">
                {{ csrf_field() }}

                    <input type="text" placeholder= "Nome" name="nome" />
                    <input type="text" placeholder= "Email" name="email" />
                    <input type="number" placeholder= "Senha" name="senha" />

                    <input type="submit" value="Salvar" />
                </form>

</body>
</html>