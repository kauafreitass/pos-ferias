<form method="post">
    <!-- Formulário que envia dados via método POST -->

    <input type="text" name="name" placeholder="Digite seu nome">
    <!-- Campo de texto para o usuário digitar o nome -->

    <button type="submit">Enviar</button>
    <!-- Botão para enviar o formulário -->
</form>

<?php
// Função que recebe um nome como parâmetro e retorna uma mensagem de boas-vindas
function welcome($name) {
    return "Bem-vindo, " . $name;
}

// Verifica se o formulário foi enviado via método POST
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Executa a função welcome passando o valor enviado no campo 'name' e imprime o resultado
    echo welcome($_POST["name"]);
}
?>
