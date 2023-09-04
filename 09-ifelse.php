<?php 

$age =1 ;

if($age <= 0){
    echo"você não existe";
}

elseif($age < 18){
    echo"você precisa de mais 18 para entrar";
}

elseif($age >= 100){
    echo"você é muito velho para entrar no site";
}

elseif ($age >= 18){
    echo"pode entrar no site";
}

else{
    echo"";
}

$adult = true;

if($adult==true){
    echo"<br>você é adulto e pode entrar no site";
}
else{
    echo"precisa ser adulto para entrar no site";
}

?>