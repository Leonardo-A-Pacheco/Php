<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>21-escolheCartão</title>
</head>
<body>
    
<form action="21-campos.php" method="post">
    <input type="radio" name="credit_card" value="visa">Visa<br>
    <input type="radio" name="credit_card" value="master">Master<br>
    <input type="radio" name="credit_card" value="american">American Express<br>
    <input type="submit" name="confirm" value="confirmar">

</form>

</body>
</html>

<?php 

    if(isset($_POST["confirm"])){

        $credit_card=null;

        if(isset($_POST["credit_card"])){
            $credit_card=$_POST["credit_card"];
        }
    }
    if($credit_card=="visa"){
        echo"você selecionou Visa";
    }
    elseif($credit_card=="master"){
            echo"você selecionou Master";
    }
    elseif($credit_card=="american"){
            echo"você selecionou American Express";
    }
    else{
        print"Marque uma opção!";
    }

?>