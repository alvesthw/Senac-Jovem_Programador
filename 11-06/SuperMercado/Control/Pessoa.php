<?php
    class Pessoa {
        private $nome;
        private $idade;
        private $cpf;

        //criando os get (get = pegar)
        public function getNome(){
            return $this->nome;
        }
        public function getIdade(){
            return $this->idade;
        }
        public function getCpf(){
            return $this->cpf;
        }

        //criando os set(set = setar ou editar)
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setIdade($idade){
            $this->idade = $idade;
        }
        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        //criando o construtor
        public function __construct($nome, $idade, $cpf){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->cpf = $cpf;
        }

        //criando o método: falar()
        public function falar(){
            echo "Olá, eu sou o(a) " . $this->nome . " e
            tenho " . $this->idade . " anos de idade.";
        }
    }
?>