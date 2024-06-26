<?php
    include (__DIR__ . '/../Control/Pedido.php'); 

    class Cliente {
        private $nome;
        private $telefone;
        private $email;
        private $endereco;
        private $cpf;

        public function __construct($nome, $telefone, $email, $endereco, $cpf) {
            $this->nome = $nome;
            $this->telefone = $telefone;
            $this->email = $email;
            $this->endereco = $endereco;
            $this->cpf = $cpf;
        }

        //métodos para fazer uma compra
        public function alterarEndereco($novoEndereco) {
            $this->endereco = $novoEndereco;

            echo "o seu novo endereço eh: " . $this->endereco;
        }

        //Método para obter as informações do Cliente
        public function obterInformacoes() {
            echo "Nome: {$this->nome}, Telefone: {$this->telefone}, Email: {$this->email}, Endereço: {$this->endereco}";
        }

        //Método que favorita um produto
        public function adicionarFavorito($produto) {
            echo "O produto" . $produto->getNome() . "foi  adicionado aos favoritos.";
        }
    }
?>
