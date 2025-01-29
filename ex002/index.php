<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variáveis</title>
</head>
<body>
    <h2>
    <?php
    //Variavel do tipo sring
    $sobrenome = "felicissimo";
 
    //Variavel do tipo int
    $idade = 35;
 
    //Variavel do tipo float
    $peso = 57.6;
 
    //Variavel do tipo boolean (verdadeiro ou falso)
    $casado = false;
 
    echo "sobrenome:$sobrenome peso:$peso idade:$idade   ";
    //metodo1: Usando var_dump para exibir o valor booleano
    var_dump($casado); //exibe 'boll(false')
   
    //metodo 2: usando uma conversão booleana para string
    echo ($casado ? "casado" : "passando sede por 7 anos"); //exbir, não é casado
    ?>
    </h2>
</body>
</html>