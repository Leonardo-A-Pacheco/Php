<?php 
include("39-database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registro da TIGRADA</h1>

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    Usuario <br>
    <input type="text" name="username"><br>
    senha: <br>
    <input type="password" name="password"> <br>
    <input type="submit" name="submit" value="registrar">

    </form>

</body>
</html>


<?php 

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        $username = filter_input(INPUT_POST,
                                "username",
                                FILTER_SANITIZE_SPECIAL_CHARS);
       
        $password = filter_input(INPUT_POST,
                                "password",
                                FILTER_SANITIZE_SPECIAL_CHARS);
        
        if(empty($username)){
            print"entre com o usuario";
            }elseif(empty($password)){
                print"entre com a senha";
            }
            else{
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (users, password)
                        VALUES ('$username','$hash')";
                
                try{
                    mysqli_query($conn, $sql);
                    echo"agora você está registrado";
                }
                catch(mysqli_sql_exception){
                    print"usuario ja registrado";
                }
            
            
            }    
    }


mysqli_close($conn);
?>