<?php
    class Player {
        private $nome;
        private $vida;

        //construtor do Jogador
        function __construct($nome, $vida){
            $this->nome = $nome;
            $this->vida = $vida;
        }

        //metodo get
        function getNome(){
            return $this->nome;
        }
        function getVida(){
            return $this->vida;
        }

        //metodo set
        function setNome($nome){
            $this->nome = $nome;
        }
        function setVida($vida){
            $this->vida = $vida;
        }

    }
?>