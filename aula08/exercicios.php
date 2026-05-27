<?php

//ex1
$nomes = ["Livia", "Vitoria", "Isabelly", "Issabella", "Luiza"];

foreach ($nomes as $valor) {
    echo "$valor <br>";
}

echo "<hr>";

//ex2
$nomes[] = "Priscilla";

foreach ($nomes as $valor) {
    echo "$valor <br>";
}

echo "<hr>";

//ex3 
$nomes[1] = "Vih";

foreach ($nomes as $valor) {
    echo "$valor <br>";
}

echo "<hr>";
//ex4
$nums = [5, 7, 10, 8, 10, 4, 10, 5, 9, 6];

foreach ($nums as $valor) {
    $soma = array_sum($nums);
}

$media = $soma / count($nums);

echo "A media é " . $media;

echo "<hr>";

$semana = ["segunda", "terça", "quarta", "quinta", "sexta", "sábado", "domingo"];

foreach ($semana as $valor) {

    if ($valor != "sábado" && $valor != "domingo") {
        echo $valor . "<br>";
    }

}

?>