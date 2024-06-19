<?php
    date_default_timezone_set('America/Sao_Paulo');
    function horaAtual(){
        
        $hora = date('H');

        if ($hora >= 0 && $hora < 12) {
            $saudacao = "Bom dia";
        } else if ($hora >= 12 && $hora < 18) {
            $saudacao = "Boa tarde";
        } else {
            $saudacao = "Boa noite";
        }
        return $saudacao;
    }

    function diaAtual(){
        $dia = date('d');
        return $dia;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
</head>
<body>
    <h1 id="saudacao"></h1>

    <h2 id="diaatual"></h2>

    <?php

    date_default_timezone_set('America/Sao_Paulo');

    function linha($semana) {
        $linha = "<tr>";

        for ($i = 0; $i <= 6; $i++) {
            if (array_key_exists($i, $semana)) {
                $linha .= "<td  class='sabado'>{$semana[$i]}</td>";
            } elseif ($i == 6){
                $linha .= "<td class='domingo'>{$semana[$i]}</td>";
            }else{ 
                $linha .= "<td></td>";
            }
        }
        
        $linha .= "<tr>";

        return $linha;

        return"
            <tr>
                <td>{$semana[0]}</td>
                <td>{$semana[1]}</td>
                <td>{$semana[2]}</td>
                <td>{$semana[3]}</td>
                <td>{$semana[4]}</td>
                <td>{$semana[5]}</td>
                <td>{$semana[6]}</td>
            </tr>
        ";
    }

    function calendario() {
        $calendario = '';
        $dia = 1;
        $semana = [];
        $dia_atual = date('h');

        while ($dia <= 31) {
            array_push($semana, $dia);

            if (count($semana) == 7) {
                $calendario .= linha($semana);
                $semana = [];
            }

            $dia++;
        }

        $calendario .= linha($semana);

        return $calendario;

    }

    ?>
    <table border="15px">
        <tr>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th class="sabado">Sáb</th>
            <th class="domingo">Dom</th>
        </tr>
        
        <?php 
            echo calendario();
            echo horaAtual();
        ?>

    </table>
    <style>
        .sabado, .domingo {
            color: red;
        }
    </style>


</body>
</html>


