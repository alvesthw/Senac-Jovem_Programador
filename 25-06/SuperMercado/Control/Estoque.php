<?php
    include (__DIR__ . '/../Control/Produto.php');

    class Estoque{
        private $id;
        private $produto;
        private $quantidade;

        //construtor
        function __construct($id, Produto $produto, $quantidade){
            $this->id = $id;
            $this->produto = $produto;
            $this->quantidade = $quantidade;
        }

        //Método para verificar disponibilidade
        public function verificarDisponibilidade() {
            if ($this->quantidade > 0){
                echo "Produto disponível, essa é a quantidade: ".$this->quantidade;
            } else{
                echo "Produto indisponível";
            }
        }


    }
?>