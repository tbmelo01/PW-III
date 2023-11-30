<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/index.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>
<body>

    <form class="formula" action="/login" method="post">
        {{ csrf_field() }}

        <div>
            <h1 class="log" ><b>Login</b></h1>
        </div>

            <br><br><br>

        <div>
            <input type="text" name="email" />            
        </div>

        <div>
            <input type="password" name="password"/>            
        </div>

        <div>
            <input type="submit" value="Login" />
        </div>  
    </form>
   
</body>
</html>