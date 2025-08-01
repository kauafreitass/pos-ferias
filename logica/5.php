<h1>Algoritmo que calcula média de 3 notas e verifica se foi aprovado</h1>
<!-- Título da página, explicando o propósito do algoritmo -->

<form method="post">
    <!-- Formulário HTML que envia os dados usando o método POST -->
    <input type="number" name="nota1" placeholder="Nota 1">
    <!-- Caixa para o usuário digitar a primeira nota, aceita apenas números -->
    <input type="number" name="nota2" placeholder="Nota 2">
    <!-- Caixa para o usuário digitar a segunda nota, aceita apenas números -->
    <input type="number" name="nota3" placeholder="Nota 2">
    <!-- Caixa para o usuário digitar a terceira nota (placeholder repetido "Nota 2", poderia ser "Nota 3") -->
    <button type="submit">Enviar</button>
    <!-- Botão para enviar os dados do formulário -->
</form>

<?php
// Início do código PHP que irá processar as notas enviadas pelo formulário

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o formulário foi enviado via método POST

    $nota1 = $_POST['nota1'];
    // Captura o valor da primeira nota digitada no formulário

    $nota2 = $_POST['nota2'];
    // Captura o valor da segunda nota digitada no formulário

    $nota3 = $_POST['nota3'];
    // Captura o valor da terceira nota digitada no formulário

    $soma = $nota1 + $nota2 + $nota3;
    // Soma as três notas

    $soma = $soma / 3;
    // Divide a soma por 3 para calcular a média das três notas

    if($soma >= 7) {
        // Verifica se a média calculada é maior ou igual a 7 (nota de aprovação)

        echo "Aprovado, sua média de nota foi de $soma";
        // Se a média for >= 7, exibe mensagem de aprovação junto com a média
    } else {
        echo "Reprovado, sua média de nota foi de $soma";
        // Se a média for menor que 7, exibe mensagem de reprovação junto com a média
    }
}
?>
