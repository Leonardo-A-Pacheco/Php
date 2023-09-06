<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aplication array</title>
</head>
<body>

    <form action="18-aplicationArray.php" method="post">
        <label for="pais">Escolha um país:</label>
    <select id="pais" name="country">
       
        <option value="USA">USA</option>
        <option value="Japan">Japão</option>
        <option value="South Korea">Coreia do Sul</option>
        <option value="India">Índia</option>
        <option value="Brazil">Brasil</option>
    </select>
        <input type="submit">
    </form>
    
</body>
</html>
<?php 

$capitals = array("USA"=>"Washington","Japan"=>"Kioto",
"South Korea"=>"Seoul","India"=>"New Delhi","Brazil"=>"Brasilia");

$chave = $capitals[$_POST["country"]];

echo "A capital é {$chave}";

?>