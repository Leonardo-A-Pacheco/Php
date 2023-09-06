<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkBox</title>

</head>
<body>

    <form action="26-checkboxArrays.php" method="post">
        <input type="checkbox" name="foods[]" value="pizza"> Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburger"> haburger<br>
        <input type="checkbox" name="foods[]" value="hotdog"> hotdog<br>
        <input type="checkbox" name="foods[]" value="lazanha"> lazanha<br>
        <input type="submit" name="enviar">
    </form>

</body>
</html>

<?php 

    if(isset($_POST["enviar"])){

        $foods = $_POST["foods"];
        
        foreach($foods as $food){
            echo " " . $food;
        }
        
    }

?>