<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>polimorfismo</title>
</head>
<body>
    <?php 
    //superclasse
    class Animal{

        public function fazersom(){
            return "O animal faz um som <br>";
        }
    }
    //subclasse
    class Cachorro extends Animal{
        public function fazerSom(){
            return "Au au au au <br>";
        }
    }  

    //outra subclasse
    class gato extends Animal{
        public function fazerSom(){
            return "Miaaaaaaaau <br>";
        }
   
    }

    //funcão para utilizar o polimorfismo
   
    function emitirSomAnimal(Animal $animal){
        echo $animal->fazerSom() . "<br>";
    }

    //cria objetos
    $cachorro1 = new Cachorro(null);
    $gato1 = new Gato(null);
    
    //chamando a função com diferentes objetos, mas com a mesma assinatura

    emitirSomAnimal($cachorro1);
    echo "<br>";
    emitirSomAnimal($gato1);
    ?>
</body>
</html>