<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classes e objetivos</title>
</head>
<body>
    <?php 
    class Carro {
        //propriedades ou atributos
        public $marca;
        public $modelo;
        public $ano;

        //metodo (função dentro da classe)
        public function exibirDetalhes() {
        echo "Marca: $this->marca <br>";
        echo "Modelo: $this->modelo <br>";
        echo "Ano: $this->ano <br>";

        }
    }
    $meuCarro = new Carro(); //instancia da classe Carro
    $meuCarro->marca = "toyota";
    $meuCarro->modelo = "corolla";
    $meuCarro->ano = 2023;

    $meuCarro->exibirDetalhes(); //exibir os detalhes do carro

    //NOVA classe
    class Pessoas{
        public $nome;
        public $idade;
        
        public function saudacao(){
        echo "Ola, meu nome e " .$this->nome. " e tenho " .$this->idade. " anos";
        
        

        }
    }
      
    $joao = new Pessoas();
    $joao->nome = "Joao";
    $joao->idade = 30;

    $joao->saudacao(); //exibir a saldação do Joao
    
    


    ?>
</body>
</html>