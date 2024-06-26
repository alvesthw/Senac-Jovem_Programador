<?php
    require_once 'Carrinho.php';
    require_once 'Produto.php';
    require_once 'MaiorMenor.php';

    class TesteMaiorMenor{
        public function testar(){
            $carrinho = new Carrinho();
            $carrinho->adiciona(new Produto("Liquidificador", 250.00));
            $carrinho->adiciona(new Produto("Geladeira", 850.00));
            $carrinho->adiciona(new Produto("Fogão", 300.00));

            $menorEMaior = new MaiorMenor();
            $menorEMaior->encontrar($carrinho);

            echo "O menor produto:";
            echo $menorEMaior->getMenor()->getNome().PHP_EOL;
            echo "<br>";    
            echo "O maior produto:";
            echo $menorEMaior->getMaior()->getNome().PHP_EOL;
        }

    }

    $teste = new TesteMaiorMenor();
    $teste->testar();
?>