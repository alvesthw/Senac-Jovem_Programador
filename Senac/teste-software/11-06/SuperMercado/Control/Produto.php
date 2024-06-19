<?php
    class Produto{
        private $id;
        private $nome;
        private $descricao;
        private $preco;

        //criando os get (get = pega)
        public function getId(){
            return $this->id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function getPreco(){
            return $this->preco;
        }

        //criando os set (set = seta ou edita)
        public function setId($id){
            $this->id = $id;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        public function setPreco($preco){
            $this->preco = $preco;
        }
        
        //criando o construtor
        public function __construct($id, $nome, $descricao, $preco){
            $this->setId($id);
            $this->setNome($nome);
            $this->setDescricao($descricao);
            $this->setPreco($preco);
        }

        //criando os métodos
        public function exibir(){
            echo "ID: " . $this->getId() . "<br>";
            echo "Nome: " . $this->getNome() . "<br>";
            echo "Descrição: " . $this->getDescricao() . "<br>";
            echo "Preço: R$ " . number_format($this->getPreco(), 2, ',', '.') . "<br><br>";
        }
    }
    
?>