<?php

$number = 7;
// Define uma variável $number com o valor 7, que será a base da tabuada a ser exibida

for($i = 1; $i <= 10; $i++) {
    // Inicia um laço (loop) com a variável $i começando em 1, e enquanto $i for menor ou igual a 10, incrementa $i em 1 a cada iteração

    echo $number . "x" . $i . " = " . $number * $i . "<br>";
    // Para cada valor de $i, exibe a multiplicação no formato "7x1 = 7", "7x2 = 14" e assim por diante
    // O operador "." concatena strings e valores
    // A tag "<br>" insere uma quebra de linha no resultado exibido no navegador
}
?>
