<?php 
$username = "LeonNardãO Pacheco<br>";
$username2 = "Leonardo A. Pacheco!<br>";
$phone = "123 456 7890";
echo $username;
//tudo minusculo
echo strtolower($username);
//tudo MAIUSCULO
echo strtoupper($username);
/*trim em PHP é usada para remover espaços em branco ou outros caracteres específicos do início e do final de uma string. Ela é útil para limpar entradas de usuário, como formulários, onde espaços em branco indesejados podem ser inseridos acidentalmente.*/
echo trim($username);
echo "123123123".$username;

echo str_pad($username,30,"aaaaaaaaa<br><hr>");

echo str_replace(" ","-",$phone)."<br><hr>";

$original = "Hello, World!";
echo strrev($original)."<br><hr>"; // Saída: "!dlroW ,olleH"

$nome = "Leonardo Pacheco";

$shuffled = str_shuffle($nome);
echo $shuffled."<br><hr>"; // Produzirá uma sequência aleatória de caracteres

$iguais= strcmp($nome,$username);
//se retornar -1 falso se retornar 1 verdadeiro

print $iguais."<br><hr>";

$iguais= strcmp($phone,"321 321 321");

print $iguais."<br><hr>";

print strlen($nome)." quatidade de caracteres <br><hr>";

$index = strpos($phone,"456") ;
print $index." posição da pesquisa <br><hr>";

$index = substr($nome,0,4) ;
print $index." mostrando substring <br><hr>";

$index = substr($nome, 4) ;
print $index." mostrando substring do fim da variavel nome <br><hr>";

//A FUNÇÃO EXPLODE QUEBRA UMA STRING EM UM ARRAY
$string = "Maçã,Pera,Uva,Laranja";
$frutas = explode(",", $string);

print_r($frutas);
echo"<hr><br>";

echo $string;

echo"<hr><br>";

foreach($frutas as $i){
    echo "<br>".$i ;
}

//A FUNÇÃO IMPLODE QUEBRA UM ARRAY EM UMA STRING

$array1= array("sou","um","array");

print_r($array1);

echo"<hr><br>";

echo"AGORA VIREI STRING ".implode("-",$array1);

    
?>