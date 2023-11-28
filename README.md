# Aprendizados com o Projeto de Registro e Login de Usuários

Durante o desenvolvimento do projeto de registro e login de usuários, aprendi várias coisas importantes:

## 1. Gerenciamento de Sessões em PHP

Aprendi a usar o `session_start()` para iniciar e gerenciar sessões em PHP, permitindo a persistência de dados entre diferentes requisições do usuário.

## 2. Conexão com Banco de Dados

Entendi como estabelecer uma conexão segura com um banco de dados MySQL usando a extensão MySQLi em PHP. Isso envolveu a criação de uma conexão, execução de consultas e uso de prepared statements para prevenir ataques de SQL injection.

## 3. Validação de Dados de Usuário

Implementei técnicas de validação de dados de usuário, incluindo:

- Verificação de campos vazios (`empty()`) para garantir que informações essenciais, como o nome, não fossem enviadas em branco.
- Utilização da função `FILTER_VALIDATE_EMAIL` para garantir que o e-mail fornecido pelo usuário seja válido.
- Verificação do comprimento da senha para garantir que ela tenha pelo menos 8 caracteres.
- Confirmação de que as senhas fornecidas nos campos "password" e "password_confirm" correspondam uma à outra.

## 4. Segurança de Senhas

Compreendi a importância de armazenar senhas de maneira segura, utilizando a função `password_hash()` para criptografar as senhas antes de armazená-las no banco de dados. Isso garante a segurança das informações dos usuários.

## 5. Manipulação de Formulários HTML

Aprendi a construir e manipular formulários HTML para coletar dados dos usuários, utilizando os métodos POST e GET, e a processar esses dados com PHP para realizar diferentes ações, como registro e login de usuários.

## 6. Redirecionamento de Páginas

Entendi como redirecionar usuários para diferentes páginas usando o cabeçalho HTTP (`header("Location: ...")`) após a conclusão de ações, como login bem-sucedido ou logout.

Esses aprendizados foram fundamentais para criar um sistema de registro e login seguro e funcional para os usuários. A prática deste projeto me proporcionou valiosos conhecimentos em desenvolvimento web com PHP e MySQL, além de boas práticas de segurança.
