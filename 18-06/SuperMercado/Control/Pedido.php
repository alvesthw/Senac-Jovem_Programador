<?php
class Pedido {
    private $idPedido;
    private $produtos;
    private $cliente;
    private $data;
    private $status;


    //Método Construtor
    public function __construct($idPedido, $produtos, $cliente, $data, $status) {
        $this->idPedido = $idPedido;
        $this->produtos = $produtos;
        $this->cliente = $cliente;
        $this->data = $data;
        $this->status = $status;
    }

    //Método para adicionar um Produto ao Pedido
    public function adicionarProduto($produto) {
        $this->produtos[] = $produto; //adiciona a um array
    }

    //Método para remover um pedido
    public function removerProduto($produto) {
        foreach ($this->produtos as $key => $value) {
            if ($value == $produto) {
                unset($this->produtos[$key]); //remove do array
            }
        }
    }

    //Método para calcular o valor total do Pedido
    public function calcularTotal() {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->preco;
        }
        return $total;
    }

}
?>
