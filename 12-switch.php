<?php
$nota="2";
//caso o break não for adicionado 
//todos os comandos serão executados 


switch($nota){
    
    case "A":
        echo"nota excelente";
        break;
        
    case "B":
        echo"nota boa";
        break;
    case "C":
        echo"nota normal";
        break;
    case "D":
        echo"nota baixa";
        break;
    case "F":
        echo"nota insuficiente";
        break;
    default:
    echo"{$nota} é invalido"; 
}


/* metodo if

if($nota == "A"){
    echo"nota excelente";
}
elseif($nota=="B"){
    echo"nota boa";
}
elseif($nota=="C"){
    echo"nota normal";
}
elseif($nota=="D"){
    echo"nota baixa";
}
elseif($nota=="F"){
    echo"nota insuficiente";
}
else{
    echo"nota invalida";
}*/

?>