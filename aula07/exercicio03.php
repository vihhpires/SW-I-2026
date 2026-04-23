<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            flex-direction: column;
            background-color: #0f172a;
            font-family: Arial, sans-serif;
            color: #e2e8f0;
        }

        h2 {
            color: #38bdf8;
            margin-bottom: 20px;
        }

        table {
            border-collapse: separate;
            border-spacing: 6px;
        }

        th {
            background-color: #1e293b;
            color: #38bdf8;
            border: 2px solid #38bdf8;
            border-radius: 8px;
            padding: 10px;
        }

        td {
            border: 2px solid #334155;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            background-color: #1e293b;
        }

        .eletronico {
            border: 2px solid #22c55e;
            background-color: #052e1a;
            color: #4ade80;
        }

        .roupa {
            border: 2px solid #a855f7;
            background-color: #2e1065;
            color: #c084fc;
        }

        .alimento {
            border: 2px solid #facc15;
            background-color: #3f2f00;
            color: #fde047;
        }
    </style>
</head>

<body>

    <h2>Tabela de Produtos $_$</h2>

    <?php
    $produtos = [
        ["nome" => "Celular", "preco" => 1200, "categoria" => "eletronico"],
        ["nome" => "Camiseta", "preco" => 50, "categoria" => "roupa"],
        ["nome" => "Arroz", "preco" => 25, "categoria" => "alimento"],
        ["nome" => "Notebook", "preco" => 3500, "categoria" => "eletronico"]
    ];
    ?>

    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>

        <?php
        foreach ($produtos as $produto) {

            $classe = $produto['categoria'];

            echo "<tr class='$classe'>";
            echo "<td>{$produto['nome']}</td>";
            echo "<td>R$ {$produto['preco']}</td>";
            echo "<td>{$produto['categoria']}</td>";
            echo "</tr>";
        }
        ?>
    </table>

</body>

</html>