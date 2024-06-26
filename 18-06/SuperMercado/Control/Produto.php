<?php
    class Produto {
        private $nome;
        private $valor;
        private $categoria;
        private $quantidade;
        private $codigo;

        //construtor
        function __construct($nome, $valor, $categoria, $quantidade, $codigo){
            $this->nome = $nome;
            $this->valor = $valor;
            $this->categoria = $categoria;
            $this->quantidade = $quantidade;
            $this->codigo = $codigo;
        }
        
        //metodos GET
        function getNome(){
            return $this->nome;
        }
        function getValor(){
            return $this->valor;
        }
        function getCategoria(){
            return $this->categoria;
        }
        function getQuantidade(){
            return $this->quantidade;
        }
        function getCodigo(){
            return $this->codigo;
        }

        //Método atualizar preço do produto
        function atualizarPreco($novoPreco){
            $this->valor = $novoPreco;
        }

        //Método para ver as informações do produto
        function verInformacoes(){
            echo "Nome: " . $this->nome . ", Preco: " . $this->valor;
        }

        //Método para verificar disponibilidade
        public function verificarDisponibilidade() {
            return $this->quantidade > 0;
        }
    }
?>
