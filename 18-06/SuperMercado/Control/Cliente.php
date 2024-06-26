<?php
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
    public function realizarCompra($pedido) {
        return "Compra realizada: " . $pedido->descricaoPedido();
    }

    //Método para obter as informações do Cliente
    public function obterInformacoes() {
        return "Nome: {$this->nome}, Telefone: {$this->telefone}, Email: {$this->email}, Endereço: {$this->endereco}";
    }

    //Método que favorita um produto
    public function adicionarFavorito($produto) {
        return "Produto {$produto->descricaoProduto()} adicionado aos favoritos.";
    }
}
?>
