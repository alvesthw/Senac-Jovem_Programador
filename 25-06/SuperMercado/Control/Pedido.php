<?php
    include (__DIR__ . '/../Control/Produto.php'); 

    class Pedido {
        private $idPedido;
        private $produtos;
        private $cliente;
        private $data;
        private $quantidade;


        //Método Construtor
        public function __construct($idPedido, Produto $produtos, Cliente $cliente, $data, $quantidade) {
            $this->idPedido = $idPedido;
            $this->produtos = $produtos;
            $this->cliente = $cliente;
            $this->data = $data;
            $this->quantidade = $quantidade;
        }

        //Método para adicionar um Produto ao Pedido
        public function adicionarProduto(Produto $produto) {
            $this->produtos[] = $produto; //adiciona a um array

            return "O produto " . $produto->getNome() . "foi adicionado a sua sacola";
        }

        //Método para remover um pedido
        public function removerProduto(Produto $produto) {
            foreach ($this->produtos as $key => $value) {
                if ($value == $produto) {
                    unset($this->produtos[$key]); //remove do array
                }
            }
        }

        //método para fazer uma compra
        public function realizarCompra() {
            return "Compra realizada do produto " . $this->produtos->getNome();
        }

        //Método para descrever o Produto
        public function descricaoPedido(){
            echo $this->produtos->getNome()->getValor()->getCategoria()->getQuantidade()->getCodigo(); 
        }
    }
?>
