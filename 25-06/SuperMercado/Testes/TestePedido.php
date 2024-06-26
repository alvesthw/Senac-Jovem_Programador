<?php
    //essa classe serve para testar a classe Pedido

    include (__DIR__ . '/../Control/Pedido.php');
    include (__DIR__ . '/../Control/Produto.php');
    include (__DIR__ . '/../Control/Cliente.php');

    class TestePedido{
        public function testar(){
            $produto1 = new Produto("sabao", 12.00, "limpeza", 001);
            $produto2 = new Produto("papel", 5.00, "papelaria", 002);
            $cliente1 = new Cliente("matheus", 00000001, "matb@gamil.com", "joaoZardo", 2222222);
            $pedido1 = new Pedido(001, $produto1, $cliente1, "25/06", 1);
            $pedido2 = new Pedido(002, $produto2, $cliente1,"25/06", 1);

            //métodos da Classe Pedido
            $pedido1->adicionarProduto($produto1);
            $pedido1->adicionarProduto($produto2);

            $pedido1->removerProduto($produto2);
            $pedido1->realizarCompra();
            $pedido1->descricaoPedido();

        }
    }

    $teste = new TestePedido();
    $teste->testar();
?>