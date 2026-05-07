<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>

    <style>
        h2 {
            color: plum;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        table {
            border-collapse: separate;
            border-spacing: 5px;
        }

        td {
            border: 6px solid plum;
            border-radius: 11px;
            padding: 8px;
        }

        .par {
            background-color: #997aeaff;
        }

        .impar {
            background-color: #54ffafff;
        }
    </style>
</head>

<body>

    <h2>Tabela com cores alternadas</h2>

    <table>
        <?php
        for ($i = 1; $i <= 8; $i++) {

            if ($i % 2 == 0) {
                $classe = "par";
            } else {
                $classe = "impar";
            }

            echo "<tr class='$classe'>";

            for ($j = 1; $j <= 4; $j++) {
                echo "<td>L$i C$j</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>