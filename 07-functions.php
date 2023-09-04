<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funções</title>
    
    <style>
        .formulario{
            display: flex;
            flex-direction: column;
            width: 200px; /* Largura da coluna */
            margin: 20px;
        }
   

    </style>
</head>

<body>
    <form class="formulario" action="07-functions.php"method= "post">
        <label for="">x</label>
        <input type="text" name="x"> 
        <label for="">y</label>
        <input type="text" name="y">
        <label for="">z</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    
    </form>
    
</body>
</html>

<?php 

$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];
$total=null;

//valor absoluto $total= abs($x);
//arredondamento $total= round($x);
//arredondamento p/ baixo $total= floor($x);
//arredondamento pra cima  $total= ceil($x);
//valor maximo $total= max($x,$y,$z);
//valor minimo $total= min($x,$y,$z);
//potencia $total= pow($x,$y);
//raiz $total= sqrt($x);
//pi $total=pi();
//randomico $total=rand(2, 10);

echo $total;

?>