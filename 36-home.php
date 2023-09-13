<?php 
/*session em PHP é uma técnica que permite armazenar dados no servidor e associá-los a um usuário específico, geralmente usando um identificador único (geralmente um cookie). Isso permite criar "sessões" de usuário, onde informações podem ser mantidas entre várias solicitações HTTP enquanto o usuário permanece ativo no site. As sessões são frequentemente usadas para rastrear informações de login, preferências do usuário e outros estados da aplicação.*/
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>idexphp</title>
</head>
<body>
    esta é a pagina de home<br>
    <form action="36-home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
   <!-- <a href="36.1-index.php">isso vai para pagina de login</a><br>--> 
</body>
</html>
   
<?php 
    $_SESSION["username"] = "leonardo";
    $_SESSION["password"] = "zxczxc";

    if(isset($_POST["logout"])){
        session_destroy();
        header("location: 36.1-index.php");
    }
   
    /*
    echo    $_SESSION["username"] . "<br>";
    echo    $_SESSION["password"] . "<br>";
*/

?>
