<?php
    class Produto {
        private $nome;
        private $valor;

        //construtor
        public function __construct($nome, $valor) {
            $this->nome = $nome;
            $this->valor = $valor;
        }

        //metodos GET para poder pegar o nome e o valor
        public function getNome() {
            return $this->nome;
        }

        public function getValor(){
            return $this->valor;
        }
    }
?>
