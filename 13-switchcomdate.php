<?php 

$date = date("l");

switch($date){
    case "Monday":
        echo"Segunda feira";
        break;
    case "Tuesday":
        echo"Terça feira";
        break;
    case "Wednesday":
        echo"Quarta feira";
        break;
    case "thursday":
        echo"Quinta feira";
        break;
    case "Friday":
        echo"Sexta feira";
        break;
    case "Saturday":
        echo"Sabado";
        break;
    case "Sunday":
        echo"Domingo";
        break;
    default:
        echo"{$date} não é um dia da semana";

}
?>