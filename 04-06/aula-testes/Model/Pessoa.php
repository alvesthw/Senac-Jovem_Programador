<?php

    class Pessoa{
        public $nome;
        public $idade;

        public function falar() {
           echo $this->nome." tem ".$this->idade." anos de idade";
        }
    }

    $antonio = new Pessoa();
    $antonio->nome = "Antonio dos Santos";
    $antonio->idade = 21;
    $antonio->falar();

    echo "<br>"; 

    $jose = new Pessoa();
    $jose->nome = "jose Pedro";
    $jose->idade = 77;
    $jose->falar();

?>