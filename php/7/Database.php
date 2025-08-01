<?php
class Database
{
    // Declaração das propriedades privadas para armazenar as informações da conexão
    private $servername = "localhost"; // Nome do servidor onde o banco está hospedado
    private $username = "root";        // Usuário do banco de dados
    private $password = "";            // Senha do banco de dados
    private $db_name = "pos-ferias";  // Nome do banco de dados

    public $pdo; // Propriedade pública que armazenará a instância da conexão PDO

    public function getConnection()
    {
        $this->pdo = null; // Inicializa a propriedade pdo como null antes de tentar a conexão

        try {
            // Tenta criar uma nova conexão PDO com os parâmetros definidos acima
            $this->pdo = new PDO(
                "mysql:host=" . $this->servername . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );

            // Define o charset da conexão para UTF-8 para evitar problemas com caracteres especiais
            $this->pdo->exec("set names utf8");
        } catch (PDOException $exception) {
            // Caso ocorra algum erro na conexão, captura a exceção e exibe uma mensagem genérica
            echo "Ocorreu um erro ao conectar ao banco de dados. Tente novamente mais tarde.";
        }

        // Retorna o objeto PDO (conexão) para uso externo
        return $this->pdo;
    }
}