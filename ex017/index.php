<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constructor e destrutor</title>
</head>
<body>
    <?php 
    class Produto{
    //atributos
    public $nome;
    public $preco;

    //constructor: chamado quando objeto é criado
    public function __construct($nome, $preco){
        $this->nome = $nome;
        $this->preco = $preco;
        echo "produto '$this->nome' criado com sucesso! <br>"; 
    }
    }
    
    //criando objetos
    $produto1 = new Produto("camiseta", 39.90);//construtor é chamado aqui

    $produto2 = new Produto("tênis", 300.00);//construtor é chamado aqui


    ?>
</body>
</html>