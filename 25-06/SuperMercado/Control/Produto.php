<?php
    class Produto {
        private $nome;
        private $valor;
        private $categoria;
        private $codigo;

        //construtor
        function __construct($nome, $valor, $categoria, $codigo){
            $this->nome = $nome;
            $this->valor = $valor;
            $this->categoria = $categoria;
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
        function getCodigo(){
            return $this->codigo;
        }

        //Método atualizar preço do produto
        function atualizarPreco($novoPreco){
            $this->valor = $novoPreco;

            echo "O preco foi atualizado para R$ " . $this->valor;
        }

        //Método para ver as informações do produto
        function verInformacoes(){
            echo "Nome: " . $this->nome . ", Preco: " . $this->valor . " reais.";
        }
    }
?>
