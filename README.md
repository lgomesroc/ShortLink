# Shortlink - Encurtador de URLs

## Descrição
Este projeto é um encurtador de URLs simples e eficaz, desenvolvido em PHP utilizando o framework Laravel. Permite aos usuários criar links curtos personalizados e acompanhar suas estatísticas.

## Pré-requisitos
* **PHP:** [Versão]
* **Composer:** [Versão]
* **Node.js:** (Se utilizar alguma ferramenta frontend)
* **Banco de dados: MySQL

## Instalação
1. **Clonar o repositório:**
   ```Bash
   
   git clone https://github.com/lgomesroc/ShortLink
   ```

## Instalar as dependências:
   ```Bash

    composer install
   ```
    
## Configurar o banco de dados:

    Copiar o arquivo .env.example para .env e configurar as credenciais do banco de dados.
    Rodar as migrações: php artisan migrate

## Iniciar o servidor de desenvolvimento:
```Bash

php artisan serve
```

# Funcionalidades

    Criação de links curtos: Permite aos usuários criar links curtos personalizados.
    Redirecionamento: Redireciona o usuário para o link original quando clica no link curto.
    Estatísticas: Mostra o número de cliques em cada link.
    CRUD completo para usuários e shortlinks: Adição, leitura, atualização e exclusão de usuários e links curtos.
    Autenticação com Laravel Sanctum: Proteção das rotas da API.
    [Outras funcionalidades implementadas]

# Estrutura do Projeto

    app: Contém o código principal da aplicação.
    database: Contém as migrações e seeders do banco de dados.
    public: Contém os arquivos públicos, como o arquivo index.php.
    resources: Contém as views, rotas, e outros recursos.
    routes: Define as rotas da aplicação.
    storage: Armazena arquivos gerados pela aplicação.

# Histórico de Versões

    v1.0.0 (10/10/2024): Versão inicial do projeto.
        Implementação básica do encurtador de links.
        Criação do banco de dados e das tabelas.
        Configuração das rotas e controllers.
    
    v1.1.0 (10/10/2024):
        Adição da funcionalidade de personalização de links curtos.
        Implementação de validação de URLs.
        Melhoria da interface do usuário.
    
    v1.2.0 (11/10/2024)

        Implementação do CRUD para API de usuários:
            GET /users: Listar todos os usuários.
            POST /users: Criar um novo usuário.
            GET /users/{id}: Obter detalhes de um usuário específico.
            PUT /users/{id}: Atualizar um usuário.
            DELETE /users/{id}: Deletar um usuário.

        Implementação do CRUD para API de shortlinks:
            POST /short-links: Criar um novo link curto.
            GET /short-links/{shortCode}: Obter detalhes de um link curto específico.
            PUT /short-links/{shortCode}: Atualizar um link curto.
            DELETE /short-links/{shortCode}: Deletar um link curto.

        Configuração do Laravel Sanctum para autenticação de API.

        Ajustes no Kernel.php para incluir middleware de autenticação.

# Contribuições

## Contribuições são bem-vindas! Para contribuir, por favor, siga estas etapas:

    Fork este repositório.
    Crie um novo branch para sua feature.
    Faça suas alterações e commit.
    Envie um pull request.

## Licença

Este projeto está licenciado sob a licença MIT.

# Autores

    Luciano Rocha - lgomesroc2012@gmail.com
