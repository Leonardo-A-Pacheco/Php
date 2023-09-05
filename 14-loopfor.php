<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop for</title>
</head>
<body>

<form action="14-loopfor.php" method="post">
    <label for="">quantos loops?</label>
    <input type="text" name="loop">
    <input type="submit" value="rodar">
</form>
    
</body>
</html>

<?php 
 $stop = $_POST["loop"];

    for($i = 0 ;$i < $stop; $i++){
        echo $i+1 . " loop<br>";
    }

?>