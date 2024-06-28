# Projeto Laravel Biblioteca

Faculdade ISL WYDEN
Análise e Desenvolvimento de Sistemas
Programação Avançada
Trabalho da AP-3
Implementação de Sistema de
Gerenciamento de Livros em uma
Biblioteca

## Pré-requisitos

Antes de começar, certifique-se de ter instalado em sua máquina:

- PHP >= 8.0
- Composer
- MySQL ou outro sistema de gerenciamento de banco de dados suportado por Laravel

## Instalação

1. *Clonar o repositório:*

   ```bash
   git clone https://github.com/YanLucasdaCostaSilva/biblioteca
   cd biblioteca
   ```
   

2. *Instalar as dependências do Composer:*
   ```bash
   composer install
   ```
   
3. *Configurar o arquivo .env:*

Faça uma cópia do arquivo .env.example e renomeie para .env. Configure as variáveis de ambiente, especialmente as relacionadas ao banco de dados:

   ```bash
   cp .env.example .env
   ```
   
4. *Gerar a chave da aplicação:*
   ```bash
   php artisan key:generate
   ```
   

5. *Executar as migrações do banco de dados:*

   ```bash
   php artisan migrate
   ```
   

6. *Iniciar o servidor de desenvolvimento:*
   ```bash
   php artisan serve
   ```
   
Acesse http://localhost:8000 no seu navegador para ver a aplicação rodando.

*Acesse /autores para gerenciar os autores.*

*Acesse /livros para gerenciar os livros.*

*Acesse /biblioteca para gerenciar as bibliotecas.*
## Funcionalidades

- Cadastrar livros, autores e bibliotecas
- Excluir livros, autores e bibliotecas
- Lista de livros, autores e bibliotecas
- visualizar um livro, um autor ou uma biblioteca