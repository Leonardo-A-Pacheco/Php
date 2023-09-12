<?php 

function resto($n){
    
    $rst=$n%2;
    
    return($rst);
    //return ($n%2);
}

echo resto(10)." resto de 10 <br><hr>";
echo resto(11)." resto de 11 <br><hr><br>";

function hipotenusa(float $a , float $b){
    
    $c = sqrt((pow($a,2) + pow($b,2)));
    
    return ($c);
}

echo "hipotenusa ".hipotenusa(3,4);



?>