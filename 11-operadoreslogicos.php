<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <body>
    <h1>operadores logicos</h1>
    <p>podemos ter <code>&&</code> e <code>||</code>ou<code>, !</code> negação</p>
    <p>exemplo:</p>
    <h2>condições de temperatura</h2>
    <p>se a agua está entre 25 && 30 graus então a temperatura é boa</p>

    <form action="11-operadoreslogicos.php" method="post">
    <label>temp</label>
    <input type="text" name="temp">
    <input type="submit" value="verificar">
    </form>

<?php 
$teste = $_POST["temp"];
//$teste = rand(24 , 31);

if($teste >=25 && $teste <=30){

    echo"agua delicia";
}
else{
    echo"nao ta boa";
}
?>
</body>
</html>
