<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários e Variavel dentro da variavel</title>
</head>
<body>
    <h2> Váriavel dentro de outra Variavel </h2>
        <?php
        // para comentarios de uma linha eu uso o barra e barra
 
        /*
        eu uso
        para comentar
        várias linhas
        ao mesmo tempo
        */
 
        $nome = "kauan";
        $sobrenome = "felicissimo";
       
        // A variavel abaixo recebe uma interpolação
        $frase = "seu nome é $nome, seu sobremone é $sobrenome";
 
        echo "$frase";
        ?>
   
   
</body>
</html>