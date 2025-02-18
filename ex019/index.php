<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //definindo a classe Animal
class Animal {
    public $nome;
 
    public function __construct($nome){
        $this->nome = $nome;
    }
 
    //método
    public function falar(){
        echo "O animal faz um som <br>";
    }
}
 
 
 
//subclasse que herda animal
class Cachorro extends Animal{
 
    //método para exibir o som do cachorro
    public function falar(){
        return "  O cachorro late <br>";
    }
}
//criando um objeto da classe cachorro
$cachorro = new Cachorro("Rex");
    echo $nome = $cachorro->nome . "<br>";

    //chamando o método sobrescrito da subclasse
    echo $cachorro->falar();

    //mostrando o metodo falar da superclasse
    $animal = new Animal("dudu");
    echo $animal->falar();

    
    ?>
</body>
</html>