

<?php 

$capitals = array("USA"=>"Washinton","Japan"=>"Kioto",
                "South Korea"=>"Seoul","India"=>"New Delhi","Brazil"=>"Brasilia");

//adiciona russia
//$capitals["Russia"]="Moscou";
//deleta brasil
//array_pop($capitals);
//deleta USA
//array_shift($capitals);
//chaves se tornam valores e os valores se tornam chaves
//$chavesTrocadas = array_flip($capitals);

             /*   foreach($capitals as $key => $value){
                    echo"{$key} = {$value} <br>";
                }*/

            //apenas chaves
        /*    $keys = array_keys($capitals);
            foreach($keys as $key){
                echo "{$key} <br>";
            }*/

               //apenas valores
           /*    $valores  = array_values($capitals);
               foreach($valores as $valor){
                   echo "{$valor} <br>";
               }
*/

/*foreach($chavesTrocadas as $key => $value){
    echo"{$key} = {$value} <br>";    
}
print"<br>";
foreach($capitals as $key => $value){
    echo"{$key} = {$value} <br>";    
}*/
// conta quantos dicionarios
print count($capitals);

?>

