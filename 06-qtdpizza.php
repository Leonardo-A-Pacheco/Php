<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>qtdpizza</title>
</head>
<body\>

    <form action="qtdpizza.php" method="post">
        <label for="">quatidade</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="calcule o total">
    </form>

</body>
</html>

<?php
$item="pizza";
$price=5.99;
$quantity= $_POST["quantity"];
$total= $quantity*$price;

echo"você pediu {$quantity} x {$item}s<br>";
echo"Seu total é $total";
?>