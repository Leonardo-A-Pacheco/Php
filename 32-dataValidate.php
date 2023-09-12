<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="32-dataValidate.php" method="post">
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
//FILTROS DE VALIDAÇÃO QUANTO A TIPO E INTRUDOÇÃO DE CONTEUDO
    if(isset($_POST["login"])){//está cheia? entao..
        //echo "ok<br>";
        //$usn=$_POST["username"];
     
        $age = filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

        if(empty($age)){ //é nula? então..
            echo"coloque uma idade valida<br>";
        }
        else{
            echo"tu tem {$age} anos"; 
        }
        
        if(empty($email)){ //é nula? então..
            echo"coloque um email valida<br>";
        }
        else{
            echo"seu {$email} é bonito<br>"; 
        }


    }
   // <script>alert("virus!!!!!!");</script>
?>