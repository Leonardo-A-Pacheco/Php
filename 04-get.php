<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>metodo get</title>
</head>
<body>
<form action="get.php" method="get">

    <label for="">usuario</label><br>
    <input type="text" name="username"><br>
    <label for="">senha:</label><br>
    <input type="password" name="password"><br>
    <input type="submit" value="Log in">
</form>

</body>
</html>


<?php 
echo "{$_GET["username"]} <br>";
echo "{$_GET["password"]} <br>";
?>

