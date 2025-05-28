AutoAgend - Sistema de Agendamento de Aulas
Este repositório contém o código-fonte do AutoAgend, um sistema de agendamento de aulas desenvolvido para facilitar o gerenciamento de aulas em autoescolas. O sistema permite que as aulas sejam facilmente gerenciadas e visualizadas, proporcionando uma experiência simples para administradores e alunos.

Requisitos
Para rodar o AutoAgend localmente, é necessário ter o XAMPP instalado em sua máquina, que inclui o Apache (servidor web) e o MySQL (sistema de banco de dados).

Além disso, o sistema foi desenvolvido utilizando PHP, HTML e CSS.

Como Rodar o Projeto Localmente
Instalar o XAMPP:
Baixe e instale o XAMPP.

Colocar o Projeto na Pasta htdocs:
Após instalar o XAMPP, mova a pasta seu-projeto (contendo o código-fonte) para dentro da pasta htdocs do XAMPP. O caminho será algo como:
C:\xampp\htdocs\seu-projeto\
Configuração do Banco de Dados:

Abra o phpMyAdmin no XAMPP (geralmente acessível em http://localhost/phpmyadmin).

Crie um banco de dados chamado autoagend.

Execute o script autoagend.sql para criar as tabelas necessárias e inserir dados iniciais.


Configuração do Banco de Dados no Código:
O arquivo config.php já está configurado para se conectar a um banco de dados local com as seguintes credenciais:

php
Copiar
$dbhost = 'LocalHost';
$dbusername = 'root';
$dbPassword = '';
$dbName = 'autoagend';


Iniciar o Apache e MySQL:
Abra o painel de controle do XAMPP e inicie os módulos Apache e MySQL.

Acessar o Sistema:
Agora, você pode acessar o sistema no navegador utilizando o seguinte endereço:

Copiar
http://localhost/seu-projeto


A partir daí, você poderá acessar o sistema e testar as funcionalidades.

Como Utilizar o Sistema
Cadastro de Aluno: Na página formulario.php, é possível cadastrar um aluno no sistema fornecendo informações como nome, email, telefone, cidade, estado, etc.
Login: Na página index.php, o administrador pode realizar o login utilizando as credenciais fornecidas.
Home: A página home.php apresenta a tela inicial do sistema com a opção de login.
