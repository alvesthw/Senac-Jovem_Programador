<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Mensal</title>
</head>
<body>
    <table border="15px">
        <tr>
            <th>Seg</th>
            <th>Ter</th>
            <th>Qua</th>
            <th>Qui</th>
            <th>Sex</th>
            <th>Sab</th>
            <th>Dom</th>
        </tr>
        
        <?php
            echo calendario();
        ?>
            
    </table>

    <?php
        function linha($semana){

            $linha = '<tr>';
            for ($i = 0; $i <= 6; $i++){
                if(array_key_exists($i, $semana)){
                    $linha .= "<td>{$semana[$i]}</td>";

                } else {
                    $linha .= "<td></td>";
                }
            }

            $linha .= '<tr>';

            return $linha;
        }

        function calendario(){
            $calendario = '';
            $dia = 1;
            $semana = [];

            while ($dia <= 31){
                array_push($semana, $dia);

                if (count($semana) == 7){
                    $calendario .= linha($semana);
                    $semana = [];
                }
            
                $dia++;
            }
            $calendario .= linha($semana);

            return $calendario;
        }
    ?>
</body>
</html>