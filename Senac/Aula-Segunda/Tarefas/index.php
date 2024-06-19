<?php 
    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form>
        <h1>GERENCIADOR DE TAREFAS</h1>
        <fieldset>
            <legend>Nova Tarefa</legend>

            <label> Tarefa: 
            <input type="text" size="50" name="nome">
            </label>

            <input type="submit" name="cadastrar" value="cadastrar">
        </fieldset>
    </form>


    <?php
        //$lista_tarefas = [];

        if (array_key_exists('nome', $_GET)){
            $_SESSION['lista_tarefas'][] = $_GET['nome'];
        }

        $lista_tarefas = [];

        if (array_key_exists('lista_tarefas',$_SESSION)){
            $lista_tarefas = $_SESSION['lista_tarefas'];
        }
    ?>
    
    <table border="1">
        <tr>
            <th>Descricao tarefa</th>
        </tr>
        <?php foreach($lista_tarefas as $tarefa) : ?>
        
        <tr>
            <td><?php echo $tarefa; ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>