<?php
    require_once 'Produto.php';
    require_once 'Carrinho.php';

    //essa classe diz qual é o produto com preço maior e qual o produto com preço menor
    class MaiorMenor{
        private $maior;
        private $menor;

        //método para encontrar o produto maior e o menor do carrinho de compras
        public function encontrar(Carrinho $carrinho){
            foreach ($carrinho->getProdutos() as $produto){
                if(empty($this->menor) || $produto->getValor() < $this->menor->getValor()){
                    $this->menor = $produto;
                }
                if(empty($this->valor) || $produto->getValor() > $this->maior->getValor()){
                    $this->maior = $produto;
                }
            }
        }

        //método GET para pegar os valores menores e maiores
        public function getMaior(){
            return $this->maior;
        }
        public function getMenor(){
            return $this->menor;
        }


    }   
?>