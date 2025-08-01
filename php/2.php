<h1>Soma de números via GET</h1>
<!-- Título da página -->

<form method="get" >
    <!-- Formulário que envia dados pelo método GET -->
    <input type="number" name="number1" placeholder="Número 1">
    <!-- Campo para inserir o primeiro número -->

    <input type="number" name="number2" placeholder="Número 2">
    <!-- Campo para inserir o segundo número -->

    <button type="submit">Enviar</button>
    <!-- Botão para enviar o formulário -->
</form>

<?php
// Verifica se os parâmetros 'number1' e 'number2' foram enviados na URL via GET
if(isset($_GET['number1']) && isset($_GET['number2'])) {
    // Atribui os valores recebidos às variáveis $number1 e $number2
    $number1 = $_GET['number1'];
    $number2 = $_GET['number2'];

    // Realiza a soma dos dois números
    $result =  $number1 + $number2;

    // Exibe o resultado da soma
    echo $result;
}
?>
