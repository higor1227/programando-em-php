<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    //for   
    for ($i = 1; $i <= 5; $i++) {
        echo $i . "<br>"; //imprime o valor de $i e pula para a próxima linha


    }

    for ($a = 1; $a <= 5; $a++) {
        echo "o quadrado de $a e" . ($a *$a) . "<br>"; //imprime o valor de $f e pula para a próxima linha
    }

    echo "<br>Foreach<br>";
    $frutas = ["banana", "maça", "uva", "pera"];

    foreach ($frutas as $fruta) {
        echo $fruta . "<br>";
    }

    echo "<br>";
    $pessoas = [
        "joao" => 25,
        "maria" => 30,
        "pedro" => 35
    ];

    foreach ($pessoas as $nome => $idade)  {
        echo $nome . " tem " . $idade . " anos<br>"; //exibe o nome e a idade
    }
    
    ?>
    
</body>
</html>