<?php
// Conectar ao banco de dados
include_once('config.php');

// Gerar código de recuperação aleatório
function gerarCodigo() {
    return str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
}

// Variáveis de controle
$etapa = 1;  // Etapa inicial (1: e-mail, 2: código, 3: nova senha)
$email = '';
$codigo = '';
$mensagem = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) && !isset($_POST['codigo']) && !isset($_POST['novaSenha'])) {
        // Primeiro passo: Enviar o código para o e-mail
        $email = $_POST['email'];

        // Verificar se o e-mail existe no banco de dados
        $query = "SELECT * FROM usuarios WHERE email = '$email'";
        $result = mysqli_query($conexao, $query);

        if (mysqli_num_rows($result) == 0) {
            $mensagem = 'Este e-mail não está cadastrado!';
        } else {
            // Gerar código aleatório de 4 dígitos
            $codigo = gerarCodigo();

            // Armazenar o código gerado no banco de dados
            $updateQuery = "UPDATE usuarios SET codigo_recuperacao = '$codigo' WHERE email = '$email'";
            mysqli_query($conexao, $updateQuery);

            // Passar para a segunda etapa: inserir código
            $etapa = 2;
        }
    } elseif (isset($_POST['codigo']) && isset($_POST['email'])) {
        // Segundo passo: Validar o código inserido
        $codigo = $_POST['codigo'];
        $email = $_POST['email'];

        // Verificar se o código está correto
        $query = "SELECT * FROM usuarios WHERE email = '$email' AND codigo_recuperacao = '$codigo'";
        $result = mysqli_query($conexao, $query);

        if (mysqli_num_rows($result) == 0) {
            $mensagem = 'Código incorreto. Tente novamente.';
        } else {
            // Passar para a terceira etapa: alterar a senha
            $etapa = 3;
        }
    } elseif (isset($_POST['novaSenha']) && isset($_POST['confirmarSenha']) && isset($_POST['email'])) {
        // Terceiro passo: Alterar a senha
        $novaSenha = $_POST['novaSenha'];
        $confirmarSenha = $_POST['confirmarSenha'];
        $email = $_POST['email'];

        // Verificar se as senhas coincidem
        if ($novaSenha === $confirmarSenha) {
            // Atualizar a senha no banco de dados

            $senhahash = password_hash($novaSenha, PASSWORD_DEFAULT);

            $updateQuery = "UPDATE usuarios SET senha = '$senhahash', codigo_recuperacao = NULL WHERE email = '$email'";
            $updateResult = mysqli_query($conexao, $updateQuery);

            if ($updateResult) {
                $mensagem = 'Senha alterada com sucesso!';
                header('Location: index.php');
                
            } else {
                $mensagem = 'Ocorreu um erro ao alterar a senha.';
            }
        } else {
            $mensagem = 'As senhas não coincidem. Tente novamente.';
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
    <!-- Passo 1: Inserir E-mail -->
    <?php if ($etapa == 1): ?>
      <form method="POST" action="">
        <h1>Esqueci a Senha</h1>
        <div class="input-box">
          <input placeholder="Digite seu e-mail" type="email" name="email" id="email" required>
          <i class="bx bxs-envelope"></i>
        </div> 
        <button type="submit" class="Login">Enviar</button>
      </form>
    <?php endif; ?>

    <!-- Passo 2: Inserir Código de Recuperação -->
    <?php if ($etapa == 2): ?>
      <form method="POST" action="">
        <input type="hidden" name="email" value="<?php echo $email; ?>">  <!-- E-mail oculto -->
        <div class="input-box">
          <input type="text" name="codigo" placeholder="Digite o código enviado" required>
        </div>
        <button type="submit" class="Login">Confirmar Código</button>
      </form>
    <?php endif; ?>

    <!-- Passo 3: Alterar Senha -->
    <?php if ($etapa == 3): ?>
      <form method="POST" action="">
        <input type="hidden" name="email" value="<?php echo $email; ?>">  <!-- E-mail oculto -->
        <div class="input-box">
          <input type="password" name="novaSenha" placeholder="Nova senha" required>
        </div>
        <div class="input-box">
          <input type="password" name="confirmarSenha" placeholder="Confirme a nova senha" required>
        </div>
        <button type="submit" class="Login">Alterar Senha</button>
      </form>
    <?php endif; ?>

    <!-- Exibir mensagens de status -->
    <?php if ($mensagem): ?>
      <div id="mensagem"><?php echo $mensagem; ?></div>
    <?php endif; ?>
  </main>
</body>
</html>