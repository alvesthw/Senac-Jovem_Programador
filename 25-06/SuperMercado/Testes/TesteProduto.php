<?php
    //essa classe serve para testar a classe Produto 

    include (__DIR__ . '/../Control/Produto.php');

    class TesteProduto{
        public function testar(){
            $produto1 = new Produto("sabao", 12.00, "limpeza",001);

            //métodos da Classe Produto
            $produto1->verInformacoes();
            echo "<br>";
            $produto1->atualizarPreco("22.00");

        }
    }

    $teste = new TesteProduto();
    $teste->testar();
?>