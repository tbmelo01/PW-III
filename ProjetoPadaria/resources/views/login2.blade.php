<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container" >   
        <form class="formula" action="/login" method="post">
            {{ csrf_field() }}
            
            

            <h1> Loguin</h1>   
            
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
    </div>
</body>
</html>