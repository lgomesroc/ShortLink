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
   git clone [URL inválido removido]
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
