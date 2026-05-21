<?php
      $frutas = ["Maçã", "Banana", "Laranja", "Pessêgo", "Melão"]; 

      //echo $frutas;
      //echo $frutas[0];

    //   foreach ($frutas as $indice => $valor) {
    //     echo "indice: $indice ==> $valor <br>";
    //   }

    //   foreach ($frutas as $valor) {
    //     echo "fruta: $valor <br>";
    //   }

    // $quant = count($frutas);

    // for ($i=0; $i <= $quant-1; $i++) { 
    //     // echo "$i <br>";
    //     echo "$frutas[$i] <br>";
    // }

    $animais = ["cachorro", "gato", "loro"];

    $animais[] = "jararaca";

    foreach ($animais as $valor) {
         echo "$valor <br>";
    }

    echo "<hr>";

    $animais[1] = "tartaruga";

     foreach ($animais as $valor) {
           echo "$valor <br>";
      }

    echo "<hr>";

    array_push($animais, "peixe dourado");

    foreach ($animais as $valor) {
        echo "$valor <br>";
    }

    echo "<hr>";

    foreach ($animais as $chave => $valor) {
        echo "$chave == $valor <br>";
    }

    echo "<hr>";

    array_unshift($animais, "Onça");

    foreach ($animais as $chave => $valor) {
        echo "$chave == $valor <br>";
    }

    echo "<hr>";

?>