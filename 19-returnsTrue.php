<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset vs smpty</title>
    <style>
        footer{
            margin-bottom: 500px;
        }
    </style>
</head>
<body>

<h1>função isset()</h1>
<?php 

/*  isset();    empty();    
ela retornará verdadeiro se houver conteudo na variavel
*/

$nome ="nome";
$sobrenome=null;

echo isset($nome) . "<br>";// se existir retorna 1
print isset($sobrenome) . "0 <br> ";// se nao existir retorna false

if(isset($nome)){
    echo"essa variavel \$nome tem conteudo<br>";
}
else{
    print"essa variavel \$nome não tem conteudo<br>";
}

if(isset($sobrenome)){
    echo"essa variavel \$sobrenome tem conteudo";
}
else{
    print"essa variavel \$sobrenome não tem conteudo";
}
?>

<p>
 A função isset() verifica se uma variável está definida e se seu valor não é nulo (null).<br>

Retorno: Retorna true 1 se a variável estiver definida e tiver um valor diferente de null. Retorna false 0 se a variável não estiver definida ou seu valor for null.
</p>
<hr>
<h1>função empty()</h1>

<?php 
/*ela retornara verdadeiro se a variavel existir e for fazia como
null, 0 ,false*/
$nome ="leonardo";
$sobrenome=null;

//echo empty($nome);
//echo empty($sobrenome);

if(empty($nome)){
    echo"essa variavel \$nome ESTÁ vazia <br>"; //return 1
}
else{
    print"essa variavel \$nome NÃO ESTÁ  vazia <br><br>"; //return 0
}

if(empty($sobrenome)){
    echo"essa variavel \$sobrenome ESTÁ vazia "; //return 1
}
else{
    print"essa variavel \$sobrenome NÃO ESTÁ vazia "; // return 0
}

?>
<hr>
<p>isset() verifica se uma variável está definida e não é null.
    </p>
<p>empty() verifica se uma variável está definida e seu valor é considerado vazio (vazio, zero, nulo, falso, etc.).
</p>

<footer></footer>
</body>
</html>
