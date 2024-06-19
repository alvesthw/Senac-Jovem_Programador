<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        table, td td{
            border: 1px solid black;
            border-collapse: collapse;
        }

        .red{
            color: red;
        }

        .current-day{
            font-weight: bold;
        }

        .month{
            margin-bottom: 20px;
        }

        .title-month{
            font-weight: bold;
            font-size: 18px;
            text-align: center;
            padding: 10px 0;
            background: gray;
        }

        .title-day{
            font-weight: bold;
            text-align: center;
            background: lightgray;
        }
    </style>
</head>
<body>
    <?php
        //funcao para gerar as linhas do calendario
        function linha($semana){
            $linha = '<tr>';
            foreach($semana as $dia){
                $class = ($dia === '') ? '' : '';
                $class .= ($dia !== '' && date('N', strtotime("2023-{$GLOBALS['mes']}-$dia")) == 7) ? ' red' : '';
                $currentDayClass = ($dia == date('j') && $GLOBALS['mes'] == date('n')) ? ' current-day' : '';
                $linha .= "<td class='$class$currentDayClass'>{$dia}</td>";
            }
            $linha .= "<td class='$class$currentDayClass'>{$dia}</td>";
        }
        $linha .= '</tr>';
        return $linha;
    function calendarioMensal($mes){
        $GLOBALS['mes'] = $mes;
        $calendario = '';

        $calendario .= '<table class="mes" border="1">';
        $calendario .= '<tr><td colspan="7" class="titulo-mes">'.date('F', strtotime("2024-{mes-01")) . '</td><tr>';
        $calendario .= '<tr class="nome-dia">';
        $calendario .= '<th>Seg</th><th>Ter</th><th>Qua</th><th>'


    }

    ?>
</body>
</html>