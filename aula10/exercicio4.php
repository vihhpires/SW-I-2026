<?php

function verificarAcesso($senhaDigitada) {

    if ($senhaDigitada == "123456") {
        return "Acesso Liberado";
    } else {
        return "Acesso Negado";
    }

}

echo verificarAcesso("123456");
echo "<br>";

echo verificarAcesso("654321");

?>