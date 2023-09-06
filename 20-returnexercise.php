<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="20-returnexercise.php" method="post">
    <label for="">Cliente</label>
    <input type="text" name="username"><br><br>
    <label for="">senha</label>
    <input type="password" name="password" placeholder="sua senha"><br><br>
    <input type="submit" name="login" value="log in">
</form>

</body>
</html>

<?php 
//fornece o nome das variaveis html
foreach($_POST as $key => $value){
  echo "{$key} = {$value} <br>";
}

if($_POST["login"]){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if(empty($username)){
        echo"entre com o nome";
    }
    elseif(empty($password)){
        echo"entre com A senha";
    }
    else{
        print"Ola {$username}";
    }
}


?>