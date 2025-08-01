<h1>Verifique qual número é maior</h1>
<!-- Título da página explicando que o código vai comparar dois números -->

<form method="post">
    <!-- Formulário HTML que envia os dados via método POST -->

    <input type="number" name="number1" placeholder="Número">
    <!-- Caixa para o usuário digitar o primeiro número, aceita apenas números -->

    <input type="number" name="number2" placeholder="Número 2">
    <!-- Caixa para o usuário digitar o segundo número, aceita apenas números -->

    <button type="submit">Enviar</button>
    <!-- Botão para enviar os dados do formulário -->
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o formulário foi enviado usando o método POST

    $number1 = $_POST['number1'];
    // Captura o valor do primeiro número enviado pelo formulário

    $number2 = $_POST['number2'];
    // Captura o valor do segundo número enviado pelo formulário

    if($number1 > $number2) {
        // Compara se o primeiro número é maior que o segundo número

        echo "O número $number1 é maior que $number2";
        // Se for verdade, exibe mensagem indicando que o primeiro número é maior
    } elseif ($number1 < $number2) {
        // Caso contrário, verifica se o primeiro número é menor que o segundo

        echo "O número $number1 é menor que $number2";
        // Se for verdade, exibe mensagem indicando que o primeiro número é menor
    } else {
        // Se não for nenhum dos dois casos acima, significa que os números são iguais

        echo "Os números são iguais";
        // Exibe mensagem indicando que os dois números são iguais
    }
}
?>
