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
            Aproveite bastante a sua vinda á Ponyville 🏕🏫
        </p>

        <img src="img/pon.png" alt="Ponyville" class="img-pony">
        <a href="index.php" class="btn-voltar">⬅ Voltar para o início</a>

    </div>

    <audio id="meuAudio">
        <source src="som.mp3" type="audio/mpeg">
    </audio>

    <script>
        window.onload = function () {
            var audio = document.getElementById("meuAudio");

            audio.play();

            
            setTimeout(function () {
                audio.pause();
                audio.currentTime = 0; 
            }, 19000); 
        }
    </script>

</body>

</html>