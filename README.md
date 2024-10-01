# README

## Introdução

Este projeto é um sistema de gerenciamento de usuários com funcionalidades de registro, login, recuperação de senha e um painel de controle. Ele utiliza um banco de dados MySQL para armazenar informações dos usuários e tokens de recuperação de senha.

## Estrutura do Projeto

A estrutura do projeto é organizada da seguinte maneira:

```
./composer.lock
./public
  ├── reset_password.php
  ├── dashboard.php
  ├── index.php
  ├── login.php
  ├── logout.php
  └── register.php
./assets
  ├── images
  ├── css
  │   └── style.css
  └── js
      └── script.js
./composer.json
./templates
  ├── header.php
  ├── register_form.php
  ├── reset_password_form.php
  ├── layout.php
  ├── messages.php
  ├── login_form.php
  └── footer.php
./src
  ├── functions.php
  ├── database.php
  ├── config.php
  ├── redirects.php
  └── auth.php
```

## Banco de Dados

O projeto utiliza duas tabelas principais no banco de dados:

### Tabela `recuperacao_senha`

Esta tabela armazena informações sobre os pedidos de recuperação de senha.

```sql
CREATE TABLE `recuperacao_senha` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(255) NOT NULL,
  `expiracao` datetime DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

**Campos:**
- `id`: Identificador único para cada solicitação.
- `email`: O email do usuário que solicitou a recuperação.
- `token`: Um token gerado para validação da solicitação.
- `expiracao`: Data e hora em que o token expira.
- `criado_em`: Data e hora em que a solicitação foi criada.

### Tabela `usuarios`

Esta tabela armazena as informações dos usuários registrados.

```sql
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `token_confirmacao` varchar(255) DEFAULT NULL,
  `token_expiracao` datetime DEFAULT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
```

**Campos:**
- `id`: Identificador único para cada usuário.
- `nome`: Nome completo do usuário.
- `email`: Email do usuário.
- `senha`: Senha criptografada do usuário.
- `token_confirmacao`: Token utilizado para confirmar o registro do usuário.
- `token_expiracao`: Data e hora em que o token de confirmação expira.
- `criado_em`: Data e hora em que o usuário foi criado.

## Dependências

O projeto utiliza o Composer para gerenciar suas dependências. As dependências estão listadas no arquivo `composer.json`.

## Como Instalar

1. Clone este repositório:
   ```bash
   git clone <URL_DO_REPOSITORIO>
   cd <NOME_DO_DIRETORIO>
   ```

2. Instale as dependências:
   ```bash
   composer install
   ```

3. Configure o banco de dados no arquivo `config.php`.

4. Importe as tabelas SQL no seu banco de dados MySQL.

5. Acesse o projeto via servidor web (por exemplo, Apache ou Nginx).

## Funcionalidades

- **Registro**: Usuários podem se registrar fornecendo nome, email e senha.
- **Login**: Usuários podem fazer login utilizando suas credenciais.
- **Recuperação de Senha**: Usuários podem solicitar a recuperação da senha através do email.
- **Painel de Controle**: Um dashboard onde os usuários podem gerenciar suas informações.

## Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues ou pull requests.

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).