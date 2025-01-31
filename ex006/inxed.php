<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Logicos</title>
</head>
<body>
    
<?php 

$idade = 20;
$tem_cnh = true;

echo ($idade >= 18 and $tem_cnh ) ? "Você pode dirigir.<br>" : "vc nao pode dirigir. <br>" ;

$tem_ingresso = false;
$tem_cortesia = true ;

echo ($tem_ingresso or $tem_cortesia) ? "você pode entra na festa. <br>" : "você nao pode entra na festa <br>";

// utilizando o simbolos && e ||
$sol = true;
$sem_chuva = false;
$feriado = true;

echo ($sol && $sem_chuva || $feriado) ? "você pode sair para passear <br>" : "melhor ficar em casa.<br>" ;

?>



</body>
</html>