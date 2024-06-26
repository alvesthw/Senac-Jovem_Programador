<?php
    require_once 'Produto.php';
    
    class Carrinho{
        private $produtos;

        //construtor
        public function __construct(){
            $this->produtos = array();
        }

        //método para adiconar produtos no carrinho
        public function adiciona(Produto $produto){
            $this->produtos[] = $produto;
        }

        //adicinar o GET para poder resgatar o produto depois
        public function getProdutos(){
            return $this->produtos;
        }
    }
?>