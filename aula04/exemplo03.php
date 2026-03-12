<?php
   $a = 20;
   $b = 5;


   $soma = $a;
   $soma += $b;


   $subtracao = $a;
   $subtracao -= $b;


   $multiplicacao = $a;
   $multiplicacao *= $b;


   $divisao = $a;
   $divisao /= $b;


   $resto = $a;
   $resto %= $b;


echo "Valor de A: $a <br>";
echo "Valor de B: $b <br><br>";

echo "Adição (A += B): $soma <br>";
echo "Subtração (A -= B): $subtracao <br>";
echo "Multiplicação (A *= B): $multiplicacao <br>";
echo "Divisão (A /= B): $divisao <br>";
echo "Resto da divisão (A %= B): $resto <br>";
?>