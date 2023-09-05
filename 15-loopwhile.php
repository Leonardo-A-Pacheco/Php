<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="15-loopwhile.php" method="post">

        <input type="submit" value="parar">

    </form>

</body>
</html>

<?php
$control = true;
$i=0;

while($control){

    if(isset($_POST["parar"])){
        $control = false;
    }
    else{
        $i++;
    echo $i . " ";
    }

}

?> 