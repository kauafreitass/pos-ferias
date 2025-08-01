<h1>For que imprime do 1 ao 100 e verifica se é par</h1>
<!-- Título da página explicando que o código imprime números de 1 a 100 e verifica se são pares -->

<?php

for ($i = 1; $i <= 100; $i++) {
    // Loop que começa com $i = 1 e vai até $i ser igual a 100, incrementando 1 a cada iteração

    $result = $i % 2;
    // Calcula o resto da divisão de $i por 2 (para saber se é par ou ímpar)

    if ($result == 0) {
        // Se o resto for diferente de 0, significa que o número é ímpar

        echo $i . " é par <br>";
        // Exibe que o número é "par"
    } else {
        // Se o resto for 0, significa que o número é par

        echo $i . " é impar <br>";
        // Exibe que o número é "ímpar"
    }
}
?>
