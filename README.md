
# Concierge System

## tabela `users`, com os tipos e tamanhos:

| Coluna   | Tipo     | Tamanho/Valores | Descrição                                                  |
|----------|----------|-----------------|------------------------------------------------------------|
| `id`     | `INT`    | `AUTO_INCREMENT PRIMARY KEY` | Identificador único para cada usuário.                   |
| `name`   | `VARCHAR`| `100`           | Nome completo do usuário.     |
| `email`  | `VARCHAR`| `100`           | Endereço de e-mail único para o usuário.                   |
| `password` | `VARCHAR` | `255`       | Senha do usuário. Tamanho suficiente para hash de senha.   |
| `type`   | `ENUM`   | `'admin', 'gestor', 'funcionario'` | Define o tipo de usuário.                                |
| `date`   | `DATETIME`| -             | Data e hora de criação do registro.                        |
| `active` | `BOOLEAN`| -               | Indica se o usuário está ativo (`1` para ativo, `0` para inativo). |

### Explicação dos tipos e tamanhos:

- **`id`**: `INT AUTO_INCREMENT PRIMARY KEY` — Identificador único de cada usuário.
- **`name`**: `VARCHAR(100)` — 100 caracteres é um limite comum para nomes completos.
- **`email`**: `VARCHAR(100)` — Considera um tamanho suficiente para e-mails padrão.
- **`password`**: `VARCHAR(255)` — 255 permite armazenar o hash de senha, que costuma ser mais longo.
- **`type`**: `ENUM` — O uso de `ENUM` permite valores restritos, facilitando o controle dos tipos de usuário.
- **`date`**: `DATETIME` — Armazena data e hora de criação. Pode ser útil para auditoria.
- **`active`**: `BOOLEAN` — Para indicar se o usuário está ativo ou não, booleanos são ideais.
