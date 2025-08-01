<?php

    // Inclui o arquivo do controller TarefaController, para acessar suas funções
    include_once "../../Controller/TarefaController.php";

    // Cria uma instância do controller que gerencia as tarefas
    $controller = new TarefaController();

    // Chama o método deletar() do controller, passando o id recebido via GET na URL
    // Presumivelmente, esse método vai remover a tarefa/aluno identificado por esse id no banco
    $controller->deletar($_GET['id']);

// Após executar a exclusão, redireciona o navegador para o caminho "\pos-ferias\php\10"
header('Location: \pos-ferias\php\10');
?>
