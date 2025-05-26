<?php
  // Este trecho de código foi comentado, mas ele seria utilizado caso você queira processar o login
  // e não apenas mostrar a tela de login.
  // O código comentado iria pegar o email e a senha do formulário e fazer a inserção no banco de dados.

  // if(isset($_POST['submit']))
  // {
  //   // Exibe os valores do formulário
  //   // print_r('Email: ' . $_POST['email']);
  //   // print_r('<br>');
  //   // print_r('Senha: ' . $_POST['senha']);
  //   // print_r('<br>');
  //   // print_r('checkbox: ' . $_POST['checkbox']);

  //   include_once('config.php'); // Inclui a configuração de conexão com o banco de dados

  //   $email = $_POST['email']; // Pega o valor do email do formulário
  //   $senha = $_POST['senha']; // Pega o valor da senha do formulário

  //   // Realiza a inserção dos dados no banco de dados
  //   $result = mysqli_query($conexao, "INSERT INTO usuarios(email,senha) 
  //   VALUES ('$email','$senha')");

  // }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Link para os ícones de caixa (Boxicons) -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
  <link rel="stylesheet" href="style.css"> <!-- Link para o arquivo de estilo CSS -->
  <title>AutoAgend Login</title> <!-- Título da página -->
</head>
<body>
  <!-- Link para voltar à página inicial (home.php) -->
  <a href="home.php">Voltar</a>

  <!-- Container principal do formulário -->
  <main class="container">
    <!-- Formulário de Login -->
    <form action="testelogin.php" method="POST">
      <h1>Login AutoAgend</h1> <!-- Título do formulário -->

      <!-- Campo para o email do usuário -->
      <div class="input-box">
        <input placeholder="Email" type="email" name="email" required> <!-- Campo de email -->
        <i class="bx bxs-user"></i> <!-- Ícone de usuário -->
      </div> 

      <!-- Campo para a senha do usuário -->
      <div class="input-box">
        <input placeholder="Senha" type="password" name="senha" required> <!-- Campo de senha -->
        <i class="bx bxs-lock-alt"></i> <!-- Ícone de cadeado -->
      </div>

      <!-- Seção para lembrar a senha ou recuperação -->
      <div class="Esqueceu-senha">
        <label>
          <!-- Checkbox para lembrar senha -->
          <input type="checkbox" name="checkbox"> 
          Lembrar senha
        </label>
        <!-- Link para recuperação de senha -->
        <a href="RecuperarSenha.php">Esqueci a senha</a>
      </div>

      <!-- Botão de login -->
      <button type="submit" class="Login" name="submit">Login</button> <!-- Envia o formulário -->

      <!-- Espaço vazio para outros elementos, se necessário -->
      <div>
        <p></p>
      </div>
    </form>
  </main>
</body>
</html>
