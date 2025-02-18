<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modificadores de acesso</title>
</head>
<body>
    <?php 
    class  Funcionario{

        //Protegido com diferentes modificadores de acesso
    public $nome; //pode ser acessado de qualquer lugar
    protected $salario; //pode ser acessado apenas dentro da superclasse e subclasse
    private $cpf; //pode ser acessado apenas dentro da superclasse

    //constructor para inicializar os valores
    public function __construct($nome, $salario, $cpf){
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cpf = $cpf;

    }
    
    //método para exibir os dados publicos para exibir os dados do funcionário

    public function exibirNomes(){
        echo "Nome: " . $this->nome . "<br>";
    }
    //metudo protegido para exibir o salário(somente para a subclasse ou na propria classe)
    protected function exibirSalario(){
        echo "Salário: " . $this->salario . "<br>";
    }

    //metodo privado para exibir o cpf(somente dentro da propria classe)
    private function exibirCpf(){
        echo "CPF: " . $this->cpf . "<br>";

    }

    //metodo publico para chamar o metodo privado e protegido dentro da propria classe
    public function exibirDados(){
        $this->exibirNomes();
        $this->exibirSalario();
        $this->exibirCpf();


    }

    }
    //criando uma instancia da classe Funcionario
    $funcionario1 = new Funcionario("João", 2000.00, "123.456.789-00");

    //acessando o nome diretamente (publico)
    $funcionario1->exibirNomes();

    //ascessando o salário diretamente (protegido)
    //$funcionario1->exibirSalario(); //comentado pq gerou erro

    //acessando o cpf diretamente (privado)
    //$funcionario1->exibirCpf(); //comentado pq gerou erro

    //acessando o metodo que acesso todos os dados
    $funcionario1->exibirDados();
    ?>
</body>
</html>