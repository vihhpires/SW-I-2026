<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 2</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* em vez de height */
            flex-direction: column;
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            padding: 20px;
            /* espaço nas bordas */
        }

        h2 {
            margin-bottom: 15px;
        }

        form {
            border: 2px solid black;
            padding: 15px;
            border-radius: 10px;
            background-color: white;
        }

        input {
            padding: 5px;
            margin: 5px;
        }

        button {
            padding: 5px 10px;
            cursor: pointer;
        }

        table {
            border-collapse: collapse;
            margin-top: 20px;
        }

        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Tabela dinâmica ^_^</h2>

    <form method="post">
        Linhas: <input type="number" name="linhas" required>
        Colunas: <input type="number" name="colunas" required>
        <button type="submit">Gerar</button>
    </form>

    <?php
    if (isset($_POST['linhas']) && isset($_POST['colunas'])) {

        $linhas = $_POST['linhas'];
        $colunas = $_POST['colunas'];

        echo "<table>";

        $i = 1;
        while ($i <= $linhas) {

            echo "<tr>";

            $j = 1;
            while ($j <= $colunas) {
                echo "<td>$i x $j</td>";
                $j++;
            }

            echo "</tr>";
            $i++;
        }

        echo "</table>";
    }
    ?>

</body>

</html>