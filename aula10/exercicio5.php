<?php

$temperaturas = [22.5, 24.0, 25.5, 23.0];

function calcularMediaTemperatura($listaDeTemperaturas) {

    $soma = 0;

    foreach ($listaDeTemperaturas as $temperatura) {
        $soma += $temperatura;
    }

    $media = $soma / count($listaDeTemperaturas);

    return $media;
}

$resultado = calcularMediaTemperatura($temperaturas);

echo "Média da temperatura: " . $resultado;

?>