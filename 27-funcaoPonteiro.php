 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>função</title>
</head>
<body>

<form action="27-funcaoPonteiro.php" method="post">
        <label>entre com o parametro</label>
        <input type="text" name="ponteiro" autofocus><br>
        <input type="submit" name="enviar">
    </form>

</body>
</html>

<?php 

if (isset($_POST["enviar"])){
   $parametro = $_POST["ponteiro"];
 
}

 function fx($parametro){
    echo"chamada1 {$parametro}<br>";
    echo"chamada2 {$parametro}<br>";
    echo"chamada3 {$parametro}<br>";
    echo"chamada4 {$parametro}<br>";
    echo"chamada5 {$parametro}<br>";
      
 }
 fx($parametro);   
  
    ?>