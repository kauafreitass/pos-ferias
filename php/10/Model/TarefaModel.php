<?php
require_once __DIR__ . '/../config.php';
// Inclui o arquivo de configuração que provavelmente cria a variável global $pdo para conexão ao banco

class TarefaModel
{
    // Método para listar todos os alunos na tabela
    public function listar()
    {
        global $pdo;
        // Usa a variável global $pdo para acessar a conexão PDO definida no config.php

        $stmt = $pdo->query("SELECT * FROM alunos");
        // Executa uma query SQL que seleciona todos os registros da tabela 'alunos'

        return $stmt->fetchAll();
        // Retorna todos os resultados da consulta como array associativo (padrão do fetch mode)
    }

    // Método para criar um novo aluno com o nome recebido
    public function criar($name)
    {
        global $pdo;

        $stmt = $pdo->prepare("INSERT INTO alunos (nome_aluno) VALUES (?)");
        // Prepara uma query SQL com placeholder ? para evitar SQL Injection

        $stmt->execute([$name]);
        // Executa a query passando o nome do aluno como parâmetro
    }

    // Método para editar o nome do aluno identificado pelo $id
    public function editar($id, $name){
        global $pdo;

        $stmt = $pdo->prepare("UPDATE alunos SET nome_aluno = ? WHERE id = ?");
        // Prepara a query para atualizar o nome do aluno conforme o id

        $stmt->execute([$name,$id]);
        // Executa a query disponibilizando os parâmetros na ordem correta: nome e id
    }

    // Método para deletar um aluno pelo seu id
    public function deletar($id){
        global $pdo;

        $stmt = $pdo->prepare("DELETE FROM alunos WHERE id = ?");
        // Prepara a query para deletar o registro que possui o id informado

        $stmt->execute([$id]);
        // Executa a query com o id passado como parâmetro
    }
}
?>
