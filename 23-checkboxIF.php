<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkBox</title>
</head>
<body>

    <form action="23-checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="pizza"> Pizza<br>
        <input type="checkbox" name="hamburger" value="Hamburger"> haburger<br>
        <input type="checkbox" name="hotdog" value="hotdog"> hotdog<br>
        <input type="checkbox" name="lazanha" value="lazanha"> lazanha<br>
        <input type="submit" name="enviar">
    </form>

</body>
</html>

<?php 
//o name do form é a variavel / o value do form é parametro
if(isset($_POST["enviar"])){

    if(isset($_POST["pizza"])){
        print"você gosta de pizza! <br>";
    }
    if(isset($_POST["hamburger"])){
        print"você gosta de hamburger! <br>";
    }
    if(isset($_POST["hotdog"])){
        print"você gosta de hotdog! <br>";
    }
    if(isset($_POST["lazanha"])){
        print"você gosta de lazanha! <br>";
    }






}
?>