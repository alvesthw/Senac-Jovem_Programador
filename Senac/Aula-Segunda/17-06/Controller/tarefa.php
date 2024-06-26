<?php
    require_once './View/template.php';
    require_once './Model/banco.php';

    date_default_timezone_set('America/Sao_Paulo');
    session_start();

    if(array_key_exists('nome', $_POST) && $_POST['nome'] != ''){
        $tarefa = [];

        $tarefa['nome'] = $_POST['nome'];


        if (array_key_exists('descricao', $_POST)){
            $tarefa['descricao'] = $_POST['descricao'];
        } else {
            $tarefa['descricao'] = '';
        }

        if (array_key_exists('prazo', $_POST)){
            $tarefa['prazo'] = formata_data_para_banco($_POST['prazo']);
        } else{
            $tarefa['prazo'] = '';
        }

        $tarefa['prioridade'] = $_POST['prioridade'];

        if (array_key_exists('concluida', $_POST)){
            $tarefa['concluida'] = 1;
        } else{
            $tarefa['concluida'] = 0;
        }

        gravar_tarefa($conexao, $tarefa);

    }

    $lista_tarefas = buscar_terefas($conexao);
    
?>

