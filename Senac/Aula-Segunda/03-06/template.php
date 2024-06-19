<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tarefa.css">
    <title>Document</title>
</head>
<body>
    <h1>Gerenciador de tarefas</h1>
    <form action="#">
        <fieldset>
            <legend>Nova Tarefa</legend>
            <label for="#">Tarefa
                <input type="text" name="nome">

            </label>

            <label>Descrição:
                <textarea name="descricao"></textarea>
            
            </label>

            <label>Prazo:
                <input type="text" name="prazo">
            </label>

            <fieldset>
                <legend> Prioridade</legend>
                <label for="#">
                    <input type="radio" name="prioridade" value="baixa"> Baixa
                    <input type="radio" name="prioridade" value="Média"> Média
                    <input type="radio" name="prioridade" value="Alta"> Alta
                </label>
            </fieldset>
            <label for="#">Tarefa Comcluida:
                <input type="checkbox" name="comcluida" value="sim">

            </label><br><br>

            <input type="submit" name="+ adicionar">
        </fieldset>
        <table>
            <tr>
                <th>Tarefa</th>
                <th>Descrição</th>
                <th>Prazo</th>
                <th>Prioridade</th>
                <th>Comcluida</th>
    
            </tr>
            <?php foreach ($lista_tarefas as $tarefa) : ?>
    
            <tr>
                <td><?= $tarefa['nome'] ?></td>
                <td><?= $tarefa['descricao'] ?></td>
                <td><?= $tarefa['prazo'] ?></td>
                <td><?= $tarefa['prioridade'] ?></td>
                <td><?= $tarefa['comcluida'] ?></td>
            </tr>
    
            <?php endforeach; ?>
        </table>
    </form>
</body>
</html>