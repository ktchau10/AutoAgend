<?php
session_start();
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('config.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

    // Verifica se o usuário foi encontrado no banco de dados
    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php');  // Redireciona para a página de login
    } else {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        // Verifica se o email é 'admin@gmail.com' e a senha é '12345'
        if ($email == 'admin@gmail.com' && $senha == '12345') {
            header('Location: formulario.php');  // Redireciona para o formulário específico
        } else {
            header('Location: sistema.php');  // Redireciona para a página padrão do sistema
        }
    }
} else {
    header('Location: index.php');  // Se o formulário não for preenchido corretamente, redireciona para a página de login
}
?>