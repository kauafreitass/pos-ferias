<h1>Verifique se o número é positivo ou negativo</h1>
<!-- Título da página que informa que o código vai verificar se um número é positivo ou negativo -->

<form method="post">
    <!-- Formulário HTML que envia os dados usando o método POST -->

    <input type="number" name="number" placeholder="Número">
    <!-- Caixa de texto para o usuário digitar um número, aceita apenas valores numéricos -->

    <button type="submit">Enviar</button>
    <!-- Botão para enviar o formulário -->
</form>

<?php

if(isset($_POST['number'])) {
    // Verifica se o campo 'number' foi enviado no formulário (se foi preenchido)

    $number = $_POST['number'];
    // Captura o valor digitado no formulário e armazena na variável $number

    if($number >= 0) {
        // Verifica se o número é maior ou igual a zero (positivo ou zero)

        echo "O número " . $number . " é positivo";
        // Se for positivo ou zero, exibe essa mensagem
    } else {
        echo "O número " . $number . " é negativo";
        // Se o número for menor que zero, exibe que é negativo
    }
}
?>
