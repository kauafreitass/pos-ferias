<?php

require_once __DIR__ . "/Controller/TarefaController.php";
// Inclui o arquivo TarefaController.php que está dentro da pasta Controller
// __DIR__ representa o diretório atual do arquivo para garantir que o caminho está correto

$controller = new TarefaController();
// Cria uma instância da classe TarefaController, responsável por controlar as ações relacionadas às tarefas

$controller->index();
// Chama o método 'index' do objeto controller, que provavelmente é responsável por exibir a lista ou página inicial das tarefas

?>