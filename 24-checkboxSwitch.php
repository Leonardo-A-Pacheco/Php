<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="24-checkboxSwitch.php" method="post">
        <input type="checkbox" name="food" value="pizza">pizza<br>
        <input type="checkbox" name="food" value="burger">burger<br>
        <input type="checkbox" name="food" value="hotdog">hotdog<br>
        <input type="checkbox" name="food" value="lazanha">lazanha
        <br><input type="submit" name="enviar">
    </form>
    
</body>
</html>

<?php 

    if(isset($_POST["enviar"])){
        switch($_POST["food"]){

            case "pizza":
                print"você gosta de pizza!<br>";
                break;
            
            case "burger":
                print"você gosta de hamburger!<br>";
                break;
            
            case "hotdog":
                print"você gosta de hotdog!<br>";
                break;
            
            case "lazanha":
                print"você gosta de lazanha!<br>";
                break;
            default:
            echo"escolha o que tu gosta!";
            
        }

    }
?>