<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AutoAgend</title>
    <style>
        /* Estilo do corpo da página */
        body{
            font-family: Arial, Helvetica, sans-serif; /* Fonte padrão */
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71)); /* Gradiente no fundo */
            text-align: center; /* Alinha o conteúdo no centro */
            color: white; /* Texto em branco */
        }

        /* Caixa de conteúdo centralizada */
        .box{
            position: absolute; /* Posição absoluta para centralizar */
            top: 50%; /* Desloca a caixa para o meio da tela verticalmente */
            left: 50%; /* Desloca a caixa para o meio da tela horizontalmente */
            transform: translate(-50%,-50%); /* Ajusta para que o centro da caixa seja realmente o centro da tela */
            background-color: rgba(0, 0, 0, 0.6); /* Fundo escuro semitransparente */
            padding: 30px; /* Espaçamento interno */
            border-radius: 10px; /* Cantos arredondados */
        }

        /* Estilo dos links */
        a{
            text-decoration: none; /* Remove o sublinhado do link */
            color: white; /* Cor do texto do link em branco */
            border: 3px solid dodgerblue; /* Borda azul */
            border-radius: 10px; /* Cantos arredondados */
            padding: 10px; /* Espaçamento interno do link */
        }

        /* Efeito ao passar o mouse sobre o link */
        a:hover{
            background-color: dodgerblue; /* Altera o fundo para azul quando o mouse passa sobre o link */
        }
    </style>
</head>
<body>
    <!-- Título da página -->
    <h1>AutoAgend</h1>

    <!-- Caixa centralizada contendo o link para login -->
    <div class="box">
        <!-- Link para a página de login -->
        <a href="index.php">Login</a>
    </div>
</body>
</html>
