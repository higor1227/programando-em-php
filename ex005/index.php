<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <h2> Opradores de adiministração</h2>

<?php 
//string
$rua = "Rua Amador Bueno";
//Atribuiçao com concatenação
$rua .= "na cidade de Sao Paulo";

//float
$preco = 2.45;

//Atribuição da soma
$preco += 2.30;
//Atribuição de subitração
$preco -= 1.20;

// Fomata o numero para usar virgula como separador decimal
$preco_formatado = number_format($preco, 2,',' , '.');

//Exibir o resultado - interpolação
echo "$rua, <br> preço R$ $preco_formatado";


?>


</body>
</html>