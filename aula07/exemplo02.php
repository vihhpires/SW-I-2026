<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02 - Tabela</title>
    <style>
        table,tr,td{
            border: solid black;
        }
    </style>
</head>
<body>
    <h1>Tabela de alunos</h1>

    <table>
        <tr>
            <th>RM</th>
            <th>Nome</th>
            <th>Email</th>
        </tr>

        <?php
            for ($i=1; $i <= 2 ; $i++) { 
                echo"<tr>";
                echo"<td>Linha $i Coluna1</td>";
                echo"<td>Linha $i Coluna2</td>";
                echo"<td>Linha $i Coluna3</td>";
                echo"</tr>";
            }
        ?>

        <!-- <tr>
            <td>Linha 1 Coluna1</td>
            <td>Linha 1 Coluna2</td>
            <td>Linha 1 Coluna3</td>
        </tr>
        <tr>
            <td>Linha 2 Coluna1</td>
            <td>Linha 2 Coluna2</td>
            <td>Linha 2 Coluna3</td>
        </tr> -->
    </table>
</body>
</html>