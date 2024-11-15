# Concierge System

## Tabela `users`, com os tipos e tamanhos:

| Coluna   | Tipo     | Tamanho/Valores                           | Descrição                                                                 |
|----------|----------|-------------------------------------------|---------------------------------------------------------------------------|
| `id`     | `INT`    | `AUTO_INCREMENT PRIMARY KEY`             | Identificador único para cada usuário.                                   |
| `name`   | `VARCHAR`| `100`                                     | Nome completo do usuário.                                                 |
| `user`   | `VARCHAR`| `45`                                      | Nome de usuário (login), com um tamanho adequado para identificadores curtos.|
| `email`  | `VARCHAR`| `100`                                     | Endereço de e-mail único para o usuário.                                  |
| `password` | `VARCHAR` | `255`                                   | Senha do usuário, armazenada de forma segura utilizando hash bcrypt.      |
| `type`   | `ENUM`   | `'admin', 'gestor', 'funcionario', 'porteiro'` | Define o tipo de usuário. As opções são: `admin`, `gestor`, `funcionario`, `porteiro`.|
| `date`   | `DATETIME`| -                                       | Data e hora de criação do registro. Pode ser útil para auditoria.        |
| `active` | `BOOLEAN`| -                                         | Indica se o usuário está ativo (`1` para ativo, `0` para inativo).       |

### Explicação dos tipos e tamanhos:

- **`id`**: `INT AUTO_INCREMENT PRIMARY KEY` — Identificador único de cada usuário, sendo gerado automaticamente.
- **`name`**: `VARCHAR(100)` — Nome completo do usuário, com até 100 caracteres.
- **`user`**: `VARCHAR(45)` — Nome de usuário (login), permitindo um identificador de até 45 caracteres.
- **`email`**: `VARCHAR(100)` — E-mail do usuário, com tamanho suficiente para armazenar endereços comuns.
- **`password`**: `VARCHAR(255)` — Utiliza 255 caracteres para armazenar o hash da senha de forma segura com bcrypt.
- **`type`**: `ENUM('admin', 'gestor', 'funcionario', 'porteiro')` — Enumeração que define os tipos de usuário no sistema. As opções incluem `admin`, `gestor`, `funcionario` e `porteiro`, controlando a permissão de acesso.
- **`date`**: `DATETIME` — Armazena a data e hora de criação do registro do usuário, útil para auditoria.
- **`active`**: `BOOLEAN` — Define se o usuário está ativo (valor `1` para ativo e `0` para inativo). Esse campo facilita a gestão de status de usuários sem necessidade de exclusão do registro.

### Criando a Tabela `users`

  ```
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    user VARCHAR(45) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    type ENUM('admin', 'gestor', 'funcionario', 'porteiro') NOT NULL,
    date DATETIME DEFAULT CURRENT_TIMESTAMP,
    active BOOLEAN DEFAULT 1
);
  ```
