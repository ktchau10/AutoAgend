<?php
    // Inicia a sessão
    session_start();
    
    // Remove a variável de sessão 'email', caso o usuário esteja logado
    unset($_SESSION['email']);
    
    // Remove a variável de sessão 'senha', caso o usuário esteja logado
    unset($_SESSION['senha']);
    
    // Redireciona o usuário para a página de login (index.php)
    header("Location: index.php");
?>
