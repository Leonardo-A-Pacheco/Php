<?php
include("39-database.php");

$username = "maria encriptada";
$password = "senhalalala"; 
//as duas variaveis acima precisam ser diferente para que
//o cadastro seja efetuado com sucesso

$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (users, password)
        VALUES ('$username', '$hash')";

/*$sql = "INSERT INTO users (users, password)
        VALUES ('$username', '$password')";*/

    /*$sql= "INSERT INTO users (users, password)
            VALUES ('Leonardo', '123qwe')";*/

    try{
        mysqli_query($conn,$sql);
        echo"usuario   registrado";
    }
    catch(mysqli_sql_exception){
        echo"não foi possivel registrar usuario";
    }
    
   mysqli_close($conn);

?>