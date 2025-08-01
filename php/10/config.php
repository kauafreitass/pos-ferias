<?php
// Define constantes para armazenar as informações de conexão com o banco de dados
define('DB_HOST', 'localhost');   // Servidor do banco
define('DB_NAME', 'pos-ferias');  // Nome do banco de dados
define('DB_USER', 'root');        // Usuário do banco
define('DB_PASS', '');            // Senha do banco (vazia nesse caso)

try {
    // Tenta criar um novo objeto PDO para conexão com o banco MySQL
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", // DSN (data source name) com host, db e charset
        DB_USER,   // Usuário do banco
        DB_PASS,   // Senha do banco
        [
            // Define opções para o objeto PDO:
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Modo de erro configurado para lançar exceções
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Fetch padrão no formato assossiativo (array com nomes das colunas)
        ]
    );
} catch (PDOException $e) {
    // Caso aconteça alguma falha na conexão, a exceção é capturada aqui
    die("Erro na conexão: " . $e->getMessage());
    // O script é interrompido e exibe uma mensagem de erro com detalhes
}
