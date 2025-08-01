<h1>Adicione dados na tabela alunos</h1>
<!-- Título da página -->

<form method="post">
    <!-- Formulário que envia dados pelo método POST -->

    <input type="text" name="name" placeholder="Nome do aluno">
    <!-- Campo para digitar o nome do aluno -->

    <button type="submit">Criar</button>
    <!-- Botão para enviar o formulário -->
</form>

<?php
require_once "Student.php";
// Importa o arquivo Student.php que contém a classe Student

$model = new Student();
// Cria uma instância da classe Student, responsável por gerenciar alunos

if (isset($_POST['name'])) {
    // Verifica se o campo 'name' foi enviado pelo formulário via POST

    $model->createStudent($_POST['name']);
    // Chama o método createStudent passando o nome recebido para inserir um novo aluno no banco
}
?>
