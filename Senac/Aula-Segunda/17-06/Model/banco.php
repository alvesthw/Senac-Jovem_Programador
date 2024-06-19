<?php
    $dbservidor = 'localhost';
    $dbusuario = 'root';
    $dbsenha = '2003';
    $dbnome = 'aula_segunda';

    $conexao = mysqli_connect($dbservidor, $dbusuario, $dbsenha, $dbnome);

    function buscar_terefas($conexao){
        $sqlBusca = 'SELECT * FROM tarefas';
        $resultado = mysqli_query($conexao, $sqlBusca);

        $tarefas = [];
        while($tarefa = mysqli_fetch_assoc($resultado)){
            $tarefas[] = $tarefa;
        }

        return $tarefas;
    }

    function gravar_tarefa($conexao, $tarefa){
        if ($tarefa['prazo'] == ''){
            $prazo = 'NULL';
        } else {
            $prazo = "'{$tarefa['prazo']}'";
        }

        $sqlGravar = "
            INSERT INTO tarefas
            (
                '($tarefa['nome']}',
                '($tarefa['descricao']}',
                {$tarefa['prioridade']},
                {$prazo},
                '{$tarefa['concluida']}'
            )
        ";

        mysqli_query($conexao, $sqlGravar);

    }
?>