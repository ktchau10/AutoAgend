<?php
// Configuração do banco de dados
$dbhost = 'localhost'; // Endereço do servidor de banco de dados
$dbusername = 'root'; // Usuário do banco de dados
$dbPassword = ''; // Senha do banco de dados
$dbName = 'autoagend'; // Nome do banco de dados

// Criando a conexão com o banco de dados
$conexao = new mysqli($dbhost, $dbusername, $dbPassword, $dbName);

// Verificando se houve erro na conexão
if ($conexao->connect_error) {
    // Exibe mensagem de erro e interrompe a execução
    die("Erro de conexão: " . $conexao->connect_error);
}

// Caso a conexão seja bem-sucedida, o script continua...
?>
