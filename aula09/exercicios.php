<?php
// ex 1

$ortfruit = ["Melão", "Uva", "Abacaxi", "Morango"];

foreach ($ortfruit as $valor) {
    echo $valor, "<br>";
}

echo "<hr>";

// ex 2

$numberelement = [10, 20, 30, 40, 50];

$totalelement = count($numberelement);

echo "O total de elementos presentes no array é: ", $totalelement;

echo "<hr>";

// ex 3

$numbers = [13, 40, 28, 16, 8];

$soma = array_sum($numbers);

echo "A soma dos valores são de: ", $soma;

echo "<hr>";

// ex 4

$numbertotal = [4, 17, 2, 9, 23, 11];

$maismais = max($numbertotal);

echo $maismais, "é o maior número entre todos.";

echo "<hr>";

// ex 5

$colors = ["Verde", "Rosa", "Vermelho"];

array_shift($colors);
array_push($colors, "Lilás");

foreach ($colors as $valor) {
    echo $valor, "<br>";
}

echo "<hr>";

// ex 6

$lista = ["Vitoria", "Loiza", "Enzo"];

if (in_array("Carlos", $lista)) {
    echo "O seu nome está na lista!";
} else {
    echo "Seu nome não está na lista!";
}

echo "<hr>";

// ex 7

$baralhado = [30, 8, 99, 290, 5, 79];

$crescente = $baralhado;
sort($crescente);

echo "Crescente:<br>";
foreach ($crescente as $valor) {
    echo $valor . " ";
}

echo "<hr>";

$decrescente = $baralhado;
rsort($decrescente);

echo "Decrescente:<br>";
foreach ($decrescente as $valor) {
    echo $valor . " ";
}

echo "<hr>";

// ex 8

$servivo = [
    "nome" => "Vitória",
    "idade" => 16,
    "cidade" => "Sampa"
];

foreach ($servivo as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}

echo "<hr>";

// ex 9

$numeros = [1,2,3,4,5,6,7,8,9,10];

$pares = [];

foreach ($numeros as $n) {
    if ($n % 2 == 0) {
        $pares[] = $n;
    }
}

foreach ($pares as $valor) {
    echo $valor . " ";
}

echo "<hr>";

// ex 10

$notas = [7, 8, 9, 6];

$media = array_sum($notas) / count($notas);

echo "A média final é: " . $media;

echo "<hr>";


?>