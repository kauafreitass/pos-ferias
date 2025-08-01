<?php
require_once __DIR__ . '/../Model/TarefaModel.php';
// Inclui o arquivo da classe TarefaModel para manipular dados no banco

class TarefaController
{
    // Método para listar todas as tarefas/alunos e carregar a página de listagem
    public function index()
    {
        $tarefa = new TarefaModel();
        // Cria uma instância do modelo

        $tarefas = $tarefa->listar();
        // Chama o método listar para obter todos os registros da tabela

        require_once __DIR__ . '/../View/tarefas/index.php';
        // Inclui a view responsável por exibir os dados (lista de alunos/tarefas)
    }

    // Método para criar um novo aluno
    public function criar()
    {
        // Verifica se o método HTTP da requisição é POST (formulário enviado)
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            // Pega o nome enviado pelo formulário

            $tarefa = new TarefaModel();
            $tarefa->criar($nome);
            // Chama o método criar da model para inserir o novo registro

            header('Location: \pos-ferias\php\10');
            // Redireciona o navegador… (ATENÇÃO: ver observações abaixo)
        } else {
            // Se não for POST, presume que queira mostrar o formulário de criação

            header('Location: C:\Turma2\xampp\htdocs\pos-ferias\php\10\View\tarefas\criar.php');
            // Redireciona para a página de criação… (ATENÇÃO: ver observações)
        }
    }

    // Método para editar um aluno já existente
    public function editar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $id = $_POST['id'];
            // Pega os dados enviados pelo formulário para edição

            $tarefa = new TarefaModel();
            $tarefa->editar($id, $nome);
            // Atualiza o registro no banco

            header('Location: \pos-ferias\php\10');
            // Redireciona o navegador após edição
        } else {
            // Se não for POST, redireciona para o formulário de edição

            header('Location: C:\Turma2\xampp\htdocs\pos-ferias\php\10\View\tarefas\editar.php');
        }
    }

    // Método para deletar um aluno/tarefa pelo id informado
    public function deletar($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $tarefa = new TarefaModel();
            $tarefa->deletar($id);
            // Chama o método para deletar o registro

            header('Location: \pos-ferias\php\10');
            // Redireciona o navegador após exclusão
        } else {
            // Se não for GET, encaminha para a página de listagem
            header('Location: C:\Turma2\xampp\htdocs\pos-ferias\php\10\View\tarefas\index.php');
        }
    }
}
