<?php
    //teste da classe Cliente

    include (__DIR__ . '/../Control/Cliente.php');
    include (__DIR__ . '/../Control/Produto.php');

    class TesteCliente{
        public function testar(){
            $produto1 = new Produto("sabao", 12.00, "limpeza", 1, 001);
            $cliente1 = new Cliente("matheus", 00000001, "matb@gamil.com", "joaoZardo", 2222222);
            

            //métodos da Classe Cliente
            $cliente1->alterarEndereco("nicolasJoao , 553");
            echo "<br>";
            $cliente1->obterInformacoes();
            echo "<br>";
            $cliente1->adicionarFavorito($produto1);

        }
    }

    $teste = new TesteCliente();
    $teste->testar();
?>