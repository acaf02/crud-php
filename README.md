# CRUD PHP MySQL Bootstrap 5

This is a simple example of a CRUD developed in PHP, MySQL, and Bootstrap 5, following the tutorial from the video [PHP CRUD Operations with MySQL Database & Bootstrap 5 - Select, Insert, Update, Delete](https://www.youtube.com/watch?v=siwoaqAhv3g).

## Database Setup

The following SQL commands can be used to create the necessary table in your MySQL database:

```sql
CREATE DATABASE tutorial_crud;

CREATE TABLE CRUD (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    gender VARCHAR(100) NOT NULL
);
```

## Usage

- Clone or download this repository to your web server.
- Make sure PHP and MySQL are configured correctly on your server.
- Open the `index.php` file in your browser to access the CRUD.

## Features

- **Create**: Add new user records.
- **Read**: View all existing user records.
- **Update**: Edit information of an existing user record.
- **Delete**: Remove existing user records.

---

# CRUD PHP MySQL Bootstrap 5

Este é um exemplo simples de CRUD desenvolvido em PHP, MySQL e Bootstrap 5, seguindo o tutorial do vídeo [PHP CRUD Operations with MySQL Database & Bootstrap 5 - Select, Insert, Update, Delete](https://www.youtube.com/watch?v=siwoaqAhv3g).

## Configuração do banco de dados

Os seguintes comandos SQL podem ser usados ​​para criar a tabela necessária em seu banco de dados MySQL:

```sql
CREATE DATABASE tutorial_crud;

CREATE TABLE CRUD (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    gender VARCHAR(100) NOT NULL
);
```

## Uso

- Clone ou baixe este repositório para o seu servidor web.
- Certifique-se de que PHP e MySQL estejam configurados corretamente em seu servidor.

- Abra o arquivo `index.php` em seu navegador para acessar o CRUD.

## Funcionalidades

- **Create (Criar):** Adicionar novos registros de usuário.
- **Read (Ler):** Visualizar todos os registros de usuário existentes.
- **Update (Atualizar):** Editar informações de um registro de usuário existente.
- **Delete (Excluir):** Remover registros de usuário existentes.

