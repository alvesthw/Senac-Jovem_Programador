<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo-Contatos</title>
    <style type="text/css">
        body{
            background-color: black;
            margin: 0; /* Remove margens padrão */
            padding: 0; /* Remove preenchimento padrão */
            width: 100vw; /* Defina a largura para 100% da largura da janela do navegador */
            height: 100vh; /* Defina a altura para 100% da altura da janela do navegador */
            overflow: hidden; /* Evita barras de rolagem desnecessárias */

            display: flex;
            align-items: center;
            justify-content: center;
        }

        div{
            display: flex;
        }
        h1, h2, p, th{
            color: white;
        }
        .container{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">

        
        <form>
            <fieldset>
                <h1>Adicione um contato:</h1>

                <input type="text" size="20" name="nome" placeholder="nome">
                <input type="text" size="20" name="email" placeholder="email">
                <input type="text" size="20" name="whats" placeholder="whats">
                <input type="text" size="20" name="cidade" placeholder="cidade">
                <input type="text" size="20" name="UF" placeholder="UF">
                
                <input type="submit" name="adicionar" value="adicionar">

                <?php
                    $lista_contatos = [];

                    if (array_key_exists('nome', $_GET) && array_key_exists('email', $_GET) && array_key_exists('whats', $_GET) && array_key_exists('cidade', $_GET) && array_key_exists('UF', $_GET)) {
                                        
                        $novo_contato = [
                            'nome' => $_GET['nome'],
                            'email' => $_GET['email'],
                            'whats' => $_GET['whats'],
                            'cidade' => $_GET['cidade'],
                            'UF' => $_GET['UF']
                        ];

                        $_SESSION['lista_contatos'][] = $novo_contato;
                    }
                ?>
            </fieldset>
        </form>

        <table border="1">
            <tr>
                <th>Lista contatos: </th>
            </tr>
            <?php foreach($lista_contatos as $contato) : ?>
        
            <tr>
                <td><?php echo $contato; ?></td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>