<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01 - Lista de itens</title>
</head>
<body>
    <h1>Lista de intens</h1>
    <ul>
        <!-- aqui começa o laço de repetição -->
         <?php 
              for ($i=1; $i <= 10 ; $i++) { 
                 echo"<li>Item $i</li>";
              }
         ?>

        <!-- aqui termina o laço de repetição -->
         
        <!-- <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li> -->

    </ul>
</body>
</html>