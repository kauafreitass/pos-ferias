<h1>Verifique se o número é par ou ímpar</h1>
<!-- Título da página -->

<form method="post">
    <!-- Formulário que envia dados pelo método POST -->

    <input type="number" name="number" placeholder="Número">
    <!-- Campo para inserir um número -->

    <button type="submit">Enviar</button>
    <!-- Botão para enviar o formulário -->
</form>

<?php
// Verifica se o parâmetro 'number' foi enviado via POST
if(isset($_POST['number'])) {
    // Calcula o resto da divisão do número por 2
    $result = $_POST['number'] % 2;

    // Se o resto for 0, o número é par
    if($result == 0) {
        echo $_POST['number'] . " é par";
    } else {
        // Caso contrário, o número é ímpar
        echo $_POST['number'] . " é impar";
    }
}
?>
