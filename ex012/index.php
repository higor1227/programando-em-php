<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while e do while</title>
</head>
<body>
    <?php 
    //while
    $i = 1;

    while ($i <= 5) {
        echo $i . "<br>"; //imprimir o valor
        $i++; //i=1
    }
    //mostra somente numeros
    $f = 2;
    while ($f <= 10) {
        echo $f . "<br>";
        $f+=2; //atribui de 2 em 2
    }
    //do while
    $g = 1;
    do {
        echo $g . "<br>";
        $g++;
    } while ($g <= 7);
    
    
    
    ?>
</body>
</html>