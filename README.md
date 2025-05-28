# AutoAgend - Sistema de Agendamento de Aulas

Este repositório contém o código-fonte do **AutoAgend**, um sistema de agendamento de aulas desenvolvido para facilitar o gerenciamento de aulas em autoescolas. O sistema permite que as aulas sejam gerenciadas e visualizadas por administradores e alunos.

## Tecnologias Utilizadas
- **PHP**
- **MySQL**
- **HTML**
- **CSS**
- **XAMPP** (para ambiente local de desenvolvimento)

## Como Rodar o Projeto Localmente

1. **Instalar o XAMPP:**
   - Faça o download do [XAMPP](https://www.apachefriends.org/index.html) e instale em sua máquina.
   - Após a instalação, abra o painel de controle do XAMPP e inicie os serviços **Apache** e **MySQL**.

2. **Configurar o Banco de Dados:**
   - Navegue até a pasta `htdocs` no diretório de instalação do XAMPP (ex: `C:\xampp\htdocs`).
   - Crie uma nova pasta chamada `seu-projeto`.
   - Dentro dessa pasta, coloque todos os arquivos do repositório.
   - No painel do XAMPP, clique em **phpMyAdmin** para abrir o banco de dados MySQL.
   - Crie um novo banco de dados chamado `autoagend`.
   - Importe o arquivo SQL `sql/autoagend.sql` para criar a estrutura do banco de dados.

3. **Configurar o arquivo de conexão com o banco de dados:**
   - O arquivo config.php já está configurado para se conectar a um banco de dados local com as seguintes credenciais:
     ```php
      $dbhost = 'LocalHost';
      $dbusername = 'root';
      $dbPassword = '';
      $dbName = 'autoagend';
     ```

4. **Rodar o Projeto:**
   - Com o Apache e MySQL em execução, acesse o navegador e digite o seguinte URL:
     ```
     http://localhost/seu-projeto/home.php
     ```

Crie um banco de dados chamado autoagend.
Execute o script autoagend.sql para criar as tabelas necessárias e inserir dados iniciais.


A partir daí, você poderá acessar o sistema e testar as funcionalidades.

Como Utilizar o Sistema
Cadastro de Aluno: Na página formulario.php, é possível cadastrar um aluno no sistema fornecendo informações como nome, email, telefone, cidade, estado, etc.
Login: Na página index.php, o administrador pode realizar o login utilizando as credenciais fornecidas.
Home: A página home.php apresenta a tela inicial do sistema com a opção de login.
