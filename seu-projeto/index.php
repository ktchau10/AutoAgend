<?php
session_start();
if (isset($_SESSION['login_error'])) {
    echo '<div class="error-message">' . $_SESSION['login_error'] . '</div>';
    unset($_SESSION['login_error']);
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
  <link rel="stylesheet" href="style.css">
  <title>AutoAgend Login</title>
</head>
<body>
  <a href="home.php">Voltar</a>
  <main class="container">  <!-- Corrigido: mainc -> main -->
    <form action="testelogin.php" method="POST">
      <h1>Login AutoAgend</h1>
      
      <div class="input-box">
        <input placeholder="email" type="email" name="email"> <!-- Correção aqui -->
        <i class="bx bxs-user"></i>
      </div> 

      <div class="input-box">
        <input placeholder="senha" type="password" name="senha"> <!-- Correção aqui: type="password" e name -->
        <i class="bx bxs-lock-alt"></i>
      </div>

      <div class="Esqueceu-senha"> 
        <label>
          <input type="checkbox" name="checkbox"> <!-- Correção aqui -->
          Lembrar senha
        </label>
        <a href="RecuperarSenha.php">Esqueci a senha</a>
      </div>

      <button type="submit" class="Login" name="submit">Login</button> <!-- Correção aqui -->
      
      <div>
        <p></p>
      </div>
    </form>
  </main>
</body>
</html>
