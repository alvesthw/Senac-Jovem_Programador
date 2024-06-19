<?php
    include './banco.php';

    function formata_data_para_banco($prazo){
        if ($prazo == ""){
            return "";
        }

        $dados = explode("/", $prazo);

        $prazo_mysql = "{$dados[2]}-{$dados[0]}";

        return $prazo_mysql;
    }
?>