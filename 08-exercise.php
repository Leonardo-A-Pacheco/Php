<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>01 - Calcule a circunfereicia pelo raio </h1>

    <form action="08-exercise.php" method="post"> 
        <label>Raio:</label><br>
        <input type="text" name="raio1"><br>
        <input type="submit" value="calcule">

        <?php 
        $raio1 = $_POST["raio1"];
        $result1 = (2*pi()*$raio1); 
        echo" = {$result1} cm";

        ?>

    </form>
<hr>

    <h1>02 - Calcule o volume pelo raio</h1>

    <form action="08-exercise.php" method="post">
        <label for="raio">Entre com o raio:</label><br>
        <input type="text" name="raio"><br>
        <input type="submit" value="calcule">

        <?php 
        $raio = $_POST["raio"];
        $result = (((4/3)*pi())*pow($raio,3));
        echo" = {$result} cm³";
        ?>

    </form>

    </form>

</body>
</html>


