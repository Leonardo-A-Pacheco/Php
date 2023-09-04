<?php 
$name="Leonardo";
$food="Pizza";
$email="email@email.com";
$year=2023; 
$users=2;
$quantity=3;

$gpa=2.5;
$price=4.99;
$tax_rate=5.1;

$employed=true;
$online=false;
$for_sale=true;

$total = null;

echo" Você pediu {$quantity} x {$food}<br>";
$total= $quantity * $price;
echo"Seu total é: \$ {$total}";


/*
echo"Olá $name<br>";
echo"Você gosta de $food";
echo"Seu email é: {$email}<br>";

echo"O ano é: {$year}<br>";
echo"Seu email é: {$email}<br>";
echo"Temos {$users} online agora<br>";
echo"Você gostaria de comprar: {$quantity} itens<br>";

echo"Seu gpa é {$gpa}<br>";
echo"Sua comida é R\$ {$price}<br>";
echo"Seu imposto é R\$ {$tax_rate}<br>";

echo"Online Status:{$online}";
 */
?>
