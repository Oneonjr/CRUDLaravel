
## CRUD Laravel Simples

[![Teste Laravel ](https://img.shields.io/badge/License-MIT-green.svg)](https://github.com/Oneonjr/CRUDLaravel/actions/workflows/laravel.yml)

Um projeto simples de CRUD (Create, Read, Update, Delete) roando em uma aplicação Laravel usando o template do Blade, Arquitetura **MVC** e **Orientação a Objetos**

## Funcionalidades

* **Create**: Adicona um novo produto no banco de dados.
* **Read**: Visualiza em lista os produtos.
* **Update**: Atualiza/Edita os produtos listados.
* **Delete**: Exclui os produtos da base de dados.

## Tecnologias utilizadas

- **Laravel**: Um framework PHP
- **Blade**: O modelo de template nativo do Laravel.
- **Bootstrap**: Framework do CSS.
- **sqlite** : banco de dados relacional apenas para teste. 

## Estrutura do projeto

### Model
#### A aplicação possui uma model do Produto.
- **Produto**: Nela possui os fillables e pode ser alterada para adicionar novas logicas.

### Controller
#### A aplicação também possui um Controlle do Produto.
- **ProdutoController**: Aqui estão todas as operações do CRUD do Produto.

### Views
#### Foram utilizadas 5 views gerada com **Blade**.
- `layout.blade.php` : Display geral corpo do HTML utlizado pelas outras Views.
- `index.blade.php` : Tela para listar todos os produtos.
- `create.blade.php` : Formulário para inserir um novo produto.
- `edit.blade.php` : Formulário para Editar um produto existente.
- `layout.blade.php` : Tela para mostrar detalhes de um único produto.


### Rotas
#### As rotas da aplicação aplicação está definida em `web.php` seguindo as diretrizes RESTful.
- `GET /produtos`: Tela para listar todos os produtos(**READ**).
- `GET /produtos/create`: Mostra tela do formulário para inserir um novo produto.
- `POST /produtos`: Salva o no produto no banco de dados (**CREATE**).
- `GET /produtos/{id}`: Mostra um produto específico.
- `GET /produtos/{id}/edit`: Mostra a tela de `form` para editar um produto.
- `PUT /produto/{id}`: Atualiza um produto no Banco (**UPDATE**).
- `DELETE /produto/{id}`: Apaga um produto do banco de dados(**DELETE**).
## instalação

#### Primeiro faça uma clone do projeto 

```http
  git clone https://github.com/Oneonjr/CRUDLaravel.git
```

#### Entre na pasta crud-produtos

```http
  cd crud-produtos
```

#### Intale as depedências

```http
  composer install
```

#### Com o banco de adaos criado crie as variaveis de ambiente no .env
- utilize o .env.example como modelo.

```http
  cp .env.example .env
```
- Exemplo.
```http
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nome-do-seu-banco
    DB_USERNAME=user-do-seu-banco
    DB_PASSWORD=senha-do-seu-banco
```

#### Configure o ```.env ```


  | Variavel   | Descrição **Obrigatórios**                                  |
| :---------- |  :------------------------------------------ |
| `DB_CONNECTION`      | O banco que será utilizado no exemplo (**mysql**) |
| `DB_HOST`      | A hospedagem do banco |
| `DB_PORT`      | A Porta do banco |
| `DB_DATABASE`      | Nome do banco |
| `DB_USERNAME`      | login do banco |
| `DB_PASSWORD`      | senha do banco |

#### rodar as migrações

```http
  php artisan migrate
```

#### Criar o Seed

```http
  php artisan db:seed
```

#### Iniciando o servidor Local

```http
  php artisan serve
```

