<?php

function classificarAluno($nota)
{
    if ($nota >= 7) {
        return "Aprovado";
    } elseif ($nota >= 5) {
        return "Recuperação";
    } else {
        return "Reprovado";
    }
}

$notas = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];

$aprovados = 0;
$recuperacao = 0;
$reprovados = 0;
$soma = 0;

foreach ($notas as $indice => $nota) {

    $situacao = classificarAluno($nota);

    echo "Aluno " . ($indice + 1) . ": Nota = $nota -> $situacao <br>";

    if ($situacao == "Aprovado") {
        $aprovados++;
    } elseif ($situacao == "Recuperação") {
        $recuperacao++;
    } else {
        $reprovados++;
    }

    $soma += $nota;
}

$media = $soma / count($notas);

echo "<br>Resumo da turma:<br>";
echo "Aprovados: $aprovados <br>";
echo "Recuperação: $recuperacao <br>";
echo "Reprovados: $reprovados <br>";
echo "Média da turma: " . number_format($media, 2) . "<br>";

if ($media >= 7) {
    echo "Turma com bom desempenho!";
} else {
    echo "Turma precisa melhorar.";
}

?>