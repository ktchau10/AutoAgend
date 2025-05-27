<?php
session_start();

if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    include_once('config.php');

    $table = 'usuarios';
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM $table WHERE email=?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $senhahash = $row['senha'];

        if(password_verify($senha, $senhahash)) {
            // Armazena dados na sessão
            $_SESSION['email'] = $row['email'];
            $_SESSION['nome'] = $row['nome_aluno'];
            $_SESSION['telefone'] = $row['telefone_aluno'];
            $_SESSION['genero'] = $row['sexo_aluno'];
            $_SESSION['data_nascimento'] = $row['data_nasc_aluno'];                                                         
            $_SESSION['cidade'] = $row['cidade_aluno'];
            $_SESSION['estado'] = $row['estado_aluno'];
            $_SESSION['endereco'] = $row['endereco_aluno'];
            $_SESSION['id'] = $row['id_aluno']; // Adiciona o ID do usuário à sessão

            // Verifica se é admin (ID = 1)
            if($row['id_aluno'] == 1) {
                header('Location: formulario.php');
            } else {
                header('Location: sistema.php');
            }
            exit();
        } else {
            echo "Senha inválida";
        }
    } else {
        echo "Nada encontrado";
    }
}
?>