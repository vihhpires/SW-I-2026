<?php
$nome = $_GET['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ponyville</title>

    <link rel="stylesheet" href="style.css">

</head>

<body class="body-restrito-pony">

    <div class="container-pony">

        <h1 class="titulo-pony">🌈 Bem-vinda(o), <?php echo $nome; ?>! </h1>

        <p class="texto-pony">
            Sua entrada foi aprovada! ✨<br>
            Você agora pode visitar a mágica cidade de Ponyville 💜
        </p>

        <img src="img/pon.png" alt="Ponyville" class="img-pony">
        <a href="index.php" class="btn-voltar">⬅ Voltar para o início</a>

    </div>

</body>
</html>