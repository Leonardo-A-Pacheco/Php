<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="31-securityFilter.php" method="post">
        nome de usuario<br> 
        <input type="text" name="username"><br>
        
        Idade<br>
        <input type="text" name="age"><br>
        
        email<br>
        <input type="text" name="email"><br>
      
        <input type="submit" name="login" value="login">
    </form>    
    
</body>
</html>

<?php 

//FILTROS DE SANITIZAÇÃO
    if(isset($_POST["login"])){
        //echo "ok<br>";
        //$usn=$_POST["username"];
        $usn=filter_input(INPUT_POST, "username",FILTER_SANITIZE_SPECIAL_CHARS);
        echo "ola {$usn}<br>";
        
        $age=filter_input(INPUT_POST, "age",FILTER_SANITIZE_NUMBER_INT);
        echo "vc tem: {$age} anos<br>";
        
        $email=filter_input(INPUT_POST, "email",FILTER_SANITIZE_EMAIL);
        echo "seu email é: {$email} <br>";


    }
   // <script>alert("virus!!!!!!");</script>
?>