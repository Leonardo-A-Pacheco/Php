<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="31-.php"method="post">
        <input type="text" name="username"><br>
        nome de usuario<br>
        <input type="submit" name="login" value="log-in">
    </form>

    <script>alert("você pegou virus!");</script>

</body>
</html>

<?php 
    $username=null;

    if(isset($_POST["login"])){

        $username = $_POST["username"];
    }

 

?>