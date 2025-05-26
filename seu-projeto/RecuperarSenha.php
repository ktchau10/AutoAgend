<?php
// Conectar ao banco de dados
include_once('config.php');

// Gerar código de recuperação aleatório
function gerarCodigo() {
    return str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) && !isset($_POST['codigo'])) {
        // Primeiro passo: enviar o código para o email
        $email = $_POST['email'];
        
        // Verificar se o email existe no banco de dados
        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = mysqli_query($conexao, $query);
        
        if (mysqli_num_rows($result) == 0) {
            echo "<script>alert('Este e-mail não está cadastrado!');</script>";
        } else {
            // Gerar código aleatório de 4 dígitos
            $codigo = gerarCodigo();
            
            // Armazenar o código gerado no banco de dados
            $updateQuery = "UPDATE usuarios SET codigo_recuperacao = '$codigo' WHERE email = '$email'";
            mysqli_query($conexao, $updateQuery);
            
            // Exibir a segunda etapa para inserir o código
            echo "<script>
                    document.getElementById('proximaEtapa').style.display = 'block';
                    document.getElementById('emailHidden').value = '$email';  // Manter o email no campo oculto
                  </script>";
        }
    } elseif (isset($_POST['codigo']) && isset($_POST['email'])) {
        // Segundo passo: validar o código inserido
        $codigo = $_POST['codigo'];
        $email = $_POST['email'];
        
        // Verificar se o código está correto
        $query = "SELECT * FROM usuarios WHERE email = '$email' AND codigo_recuperacao = '$codigo'";
        $result = mysqli_query($conexao, $query);
        
        if (mysqli_num_rows($result) == 0) {
            echo "<script>alert('Código incorreto. Tente novamente.');</script>";
        } else {
            // Se o código for correto, permitir a alteração da senha
            echo "<script>
                    document.getElementById('alterarSenha').style.display = 'block';
                  </script>";
        }
    } elseif (isset($_POST['novaSenha']) && isset($_POST['confirmarSenha']) && isset($_POST['email'])) {
        // Terceiro passo: alterar a senha
        $novaSenha = $_POST['novaSenha'];
        $confirmarSenha = $_POST['confirmarSenha'];
        $email = $_POST['email'];
        
        // Verificar se as senhas coincidem
        if ($novaSenha === $confirmarSenha) {
            // Atualizar a senha no banco de dados
            $updateQuery = "UPDATE usuarios SET senha = '$novaSenha', codigo_recuperacao = NULL WHERE email = '$email'";
            $updateResult = mysqli_query($conexao, $updateQuery);
            
            if ($updateResult) {
                echo "<script>alert('Senha alterada com sucesso!');</script>";
            } else {
                echo "<script>alert('Ocorreu um erro ao alterar a senha.');</script>";
            }
        } else {
            echo "<script>alert('As senhas não coincidem. Tente novamente.');</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
  <link rel="stylesheet" href="style.css">
  <title>Recuperar Senha</title>
</head>
<body>
  <a href="home.php">Voltar</a>
  <main class="container">
    <!-- Primeiro Passo: Inserir E-mail -->
    <form method="POST" action="">
      <h1>Esqueci a Senha</h1>
      <div class="input-box">
        <input placeholder="Digite seu e-mail" type="email" name="email" id="email" required>
        <i class="bx bxs-envelope"></i>
      </div> 
      <button type="submit" class="Login">Enviar</button>
    </form>
    
    <!-- Etapa 2: Inserir o Código de Recuperação -->
    <div id="proximaEtapa" style="display:none;">
      <form method="POST" action="">
        <input type="hidden" name="email" id="emailHidden">  <!-- Oculto para garantir que o email seja enviado -->
        <div class="input-box">
          <input type="text" name="codigo" placeholder="Digite o código enviado" required>
        </div>
        <button type="submit" class="Login">Confirmar Código</button>
      </form>
    </div>

    <!-- Etapa 3: Alteração da Senha -->
    <div id="alterarSenha" style="display:none;">
      <form method="POST" action="">
        <input type="hidden" name="email" id="emailHidden2">  <!-- Oculto para garantir que o email seja enviado -->
        <div class="input-box">
          <input type="password" name="novaSenha" placeholder="Nova senha" required>
        </div>
        <div class="input-box">
          <input type="password" name="confirmarSenha" placeholder="Confirme a nova senha" required>
        </div>
        <button type="submit" class="Login">Alterar Senha</button>
      </form>
    </div>

    <div id="mensagem"></div>
  </main>
</body>
</html>
