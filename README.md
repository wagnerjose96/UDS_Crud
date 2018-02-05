## Informações do Projeto
* Já realizei projetos com a arquitetura "MVC", isso me ajudou a compreender a estrutura do projeto construida pelo "Laravel", porém esse é o meu primeiro projeto utilizando o framework. Para a construção desse projeto, utilizei de alguns cursos disponíveis no "Alura.com.br", além de outras fontes de documentação e pesquisa. 
* Com o curto tempo e pouco conhecimento sobre o framework, procurei utilizar um código limpo, além de uma escrita de fácil compreensão.

## Observações
* Com todos os requisitos requeridos pelo teste, ainda não foram implementados alguns detalhes, como uma "Mask" para a exibição dos dados "Preços" e "datas", o Uuid não foi implementado nas entidades, pela falta de conhecimento do mesmo no framework.

## Banco de Dados
* Configuração do mysql:
    - utilizei mysql version 14.14 Distrib 5.7.21, for Linux (i686);
    - abra um termina, execute o mysql "mysql -u root"
    - crie um database, como por exemplo "create database UDS_Crud";
    - conecte ao database, "use UDS_Crud";
    - mysql configurado.
* Configuração do arquivo .env do projeto:
    - altere o nome do arquivo ".env.example" para ".env";
    - logo após edite os campos, "user e password de acordo com seu mysql":
    - DB_DATABASE='UDS_Crud'
    - DB_USERNAME=root
    - DB_PASSWORD=
    - .env configurado.
    
* Carregando as migrations para instânciar as tabelas no database.
    - abra um terminal, e vá até o diretório do projeto, "cd Download/UDS_Crud";
    - execute o comando:
    - php artisan migrate.
    - tabelas adicionadas no database;
    
* Carregando as seeds para popular as tabelas.
    - no mesmo terminal, execute os comandos abaixo:
    - "php artisan db:seed --class=criando_produtos";
    - "php artisan db:seed --class=criando_pessoas";
    - "php artisan db:seed --class=criando_pedidos";
    - tabelas populadas.

## Utilizar o sistema
* Logo após de configurar o banco de dados, abra um terminal e execute o comando:
    - "php artisan serve";
    - assim o laravel irá carregar a aplicação.

