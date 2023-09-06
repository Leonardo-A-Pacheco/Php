<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switchRadio</title>
</head>
<body>

    <form action="22-switchRadio.php" method="post">
    <input type="radio" name="cdc" value ="visa"> Visa<br>
    <input type="radio" name="cdc" value ="master"> Master Card<br>
    <input type="radio" name="cdc" value ="american">American Express<br>
    <input type="submit" name="confirm" value="Confirmar">

    </form>

</body>
</html>

<?php 
    $creditCard=null;

    if(isset($_POST["confirm"])){
        $creditCard = $_POST["cdc"];
    }
        switch($creditCard){
            case "visa":
                echo"seu cartão é visa";
                break;
            case "master":
                echo"seu cartão é master";
                break;
            case "american":
                echo"seu cartão é american";
                break;
            default:
                print"Escolha um cartão";
                
        }

?>