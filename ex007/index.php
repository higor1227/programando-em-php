<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Comparação</title>
</head>
<body>
    <?php 
    $a = 10;
    $b = "10";

echo "<br> <h1> Comparção de igualdade</h1>";

    echo ($a == $b) ? "Sao iguais. <br>" : "Nao iguais <br>";

    echo ($a === $b) ? "São estritamente iguais <br>" : "Não sao estritamente iguais <br>";

    echo "<br> <h1> Comparação de diferença </h1>";
    echo ($a != $b) ? "São diferentes" : "São iguais";
    echo ($a !== $b) ? "São estritamente diferentes." : "Sao estritamente iguais" ;

    $teste = false;
    echo "<br> <h2> Negação </h2>";
    echo (!$teste) ? "é verdadeiro." : "é false";

    $c = 5;
    $d = 3;
    echo "<br> <h2> Maior que, Menor que </h2>";
    
    echo ($c > $d) ? "C é meior que D"
    : "C é menor que D";
    echo "<br>";

    echo ($c < $d) ? "C é menor que D" : "C é menor que D";

    $e = 5;
    $f = 5;
    $g = 3;

    echo "<br> <h2> Maior ou igual a, menor ou igual a </h2>";
    echo ($e >= $f) ? "E é menor ou igual a F" : "E não é menor ou igual a F";
    echo "<br>";

    echo ($e <= $g) ? "E ~e igual a G" : "E não é menor que a G";

    
    
    
    ?>
</body>
</html>