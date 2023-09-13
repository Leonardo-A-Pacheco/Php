

<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>homephp</title>
    </head>
    <body>
        <form action="36.1-index.php" method="post">
            nome: <br>
            <input type="text" name="username"> <br>
            senha: <br>
            <input type="password" name="password" value=""><br> 
            <input type="submit" name="login" value="login">
        </form>
   <!--esta é a pagina de login!<br>
        <a href="36-home.php">isso vai para pagina inicial</a><br>
    </body>-->
</html>

<?php 
    if(isset($_POST["login"])){

        
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];
        
            ECHO $_SESSION["username"]."<br>";
            echo $_SESSION["password"]."<br>";

            header("location: 36-home.php");
        }else{
            print"precisa de usuario/password <br>";
        }
       
    }
?>