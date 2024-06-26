<?php
    //essa classe serve para testar a classe Pedido

    include (__DIR__ . '/../Control/Estoque.php');

    class TesteEstoque{
        public function testar(){
            //aqui eu crio varios produtos
            $produto1 = new Produto("sabao", 12.00, "limpeza",001);
            $produto2 = new Produto("folha sulfite", 5.00, "papelaria", 002);
            $produto3 = new Produto("Fini", 3.00, "comida", 003);

            $estoque[] = new Estoque(001, $produto1, 5);
            $estoque[] = new Estoque(002, $produto2, 10);
            $estoque[] = new Estoque(003, $produto3, 15);

            //metodo para verificar a disponibilidade do produto1 que esta na classe Estoque
            $estoque[0]->verificarDisponibilidade();
            echo "<br>";
            $estoque[1]->verificarDisponibilidade();
            echo "<br>";
            $estoque[2]->verificarDisponibilidade();


        }
    }

    $teste = new TesteEstoque();
    $teste->testar();
?>