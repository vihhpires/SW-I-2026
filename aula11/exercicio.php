<?php

function classificarAluno($notas)
{
    $aprovados = 0;
    $recuperacao = 0;
    $reprovados = 0;
    $soma = 0;

    foreach ($notas as $indice => $nota) {

        if ($nota >= 7) {
            $situacao = "Aprovado";
            $aprovados++;
        } elseif ($nota >= 5) {
            $situacao = "Recuperação";
            $recuperacao++;
        } else {
            $situacao = "Reprovado";
            $reprovados++;
        }

        echo "Aluno " . ($indice + 1) . ": Nota = " . $nota . " -> " . $situacao . "<br>";

        $soma += $nota;
    }

    $media = $soma / count($notas);

    echo "<br>Resumo da turma:<br>";
    echo "Aprovados: " . $aprovados . "<br>";
    echo "Recuperação: " . $recuperacao . "<br>";
    echo "Reprovados: " . $reprovados . "<br>";
    echo "Média da turma: " . $media . "<br>";

    if ($media >= 7) {
        echo "Turma com bom desempenho!";
    } else {
        echo "Turma precisa melhorar.";
    }
}

$notas = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];

classificarAluno($notas);

?>