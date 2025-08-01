<?php
require_once "Database.php";

class Student
{

    private $pdo;

    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getConnection();
    }

    public function createStudent($name)
    {
        $stmt = $this->pdo->prepare("INSERT INTO alunos (nome_aluno) VALUES (?)");
        $stmt->execute([$name]);
        return "Aluno cadastrado com sucesso";
    }
}