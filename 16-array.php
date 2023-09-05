<?php 
$j=$i=0;

$foods = array("a","b","c","feijão","queijo",);
// elemento a elemento
print $foods[0] . "<br>";
print $foods[1] . "<br>";
print $foods[2] . "<br>";
print "<br>";

//laço for
for( $i=0 ; $i<sizeof($foods); $i++){
    print $foods[$i] . " ";
}
print "<br>";
$carros = array("uno","vectra","147","f-350","hb20");
print "<br>";

//laço while
while (true) {
    if ($j >= count($carros)) {
        break; // Sair do loop quando todos os carros foram impressos
    }
    
    echo $carros[$j] . "<br>";
    $j++;
}

//sizeof e count tem a mesma função para arrays

//imprime elementos do array com uma variavel temporaria
print "<br>";
foreach($foods as $comida){
    print $comida . "<br>";
}

print "<br>";
//insere
array_push($carros,"f1000");
foreach($carros as $i){
    print $i . "<br>";
}
print "<br>";
//remove o ultimo
array_pop($carros);

foreach($carros as $i){
    print $i . "<br>";
}
print "<br>";
//remove o primeiro
array_shift($carros);

foreach($carros as $i){
    print $i . "<br>";
}
print "<br>";
// altera as posições do array
$carroreverso = array_reverse($carros);

foreach($carroreverso as $i){
    print $i . "<br>";
}
print "<br>";

?>