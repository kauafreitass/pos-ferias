<?php require_once __DIR__ . '/../layout.php'; ?>
<!--
Inclui o arquivo layout.php que provavelmente contém o template padrão da página (ex: cabeçalho, rodapé, estilos).
Dessa forma, este arquivo foca no conteúdo específico da listagem de alunos.
-->

<h2>Alunos</h2>
<!-- Título do conteúdo mostrando que é a página de alunos -->

<a href="/pos-ferias/php/10/View/tarefas/criar.php">Criar aluno</a>
<!-- Link para a página onde será possível criar um novo aluno -->

<ul>
    <!-- Lista não ordenada que vai conter os alunos listados dinamicamente -->

    <?php foreach ($tarefas as $tarefa): ?>
        <!--
        Percorre o array $tarefas (contendo os dados dos alunos) recebido do controller/model.
        Para cada elemento, atribui os dados à variável $tarefa.
        -->

        <li>
            <?= $tarefa['nome_aluno']; ?>
            <!-- Exibe o nome do aluno -->

            - <a href="/pos-ferias/php/10/View/tarefas/editar.php?id=<?= $tarefa['id']; ?>">Editar</a>
            <!-- Link para página de edição do aluno, passando o id dele como parâmetro na URL -->

        </li>
        - <a href="/pos-ferias/php/10/View/tarefas/deletar.php?id=<?= $tarefa['id']; ?>">Deletar</a></li>
        <!-- Link para página de exclusão do aluno, também passando o id na URL -->

    <?php endforeach; ?>
</ul>
