<?php

function calcularAutonomia($capacidadeBateria, $consumoPorMinuto) {
    $tempo = $capacidadeBateria / $consumoPorMinuto;
    return $tempo;
}

$autonomia = calcularAutonomia(100, 5);

echo "Tempo estimado de voo: " . $autonomia . " minutos.";

?>