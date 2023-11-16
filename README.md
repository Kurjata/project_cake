# Projeto de Estudo CakePHP

Este repositório contém um projeto de estudo desenvolvido com o [CakePHP](https://cakephp.org), um framework moderno, rápido e robusto para desenvolvimento de aplicações web em PHP.

## Sobre o Projeto

Este projeto é destinado a aprender e demonstrar as melhores práticas no desenvolvimento de aplicações web utilizando CakePHP. Abrange desde a configuração básica do framework até recursos mais avançados.

## Começando

Essas instruções fornecerão uma cópia do projeto em execução na sua máquina local para fins de desenvolvimento e teste. Veja a seção de *deploy* para notas sobre como implantar o projeto em um ambiente de produção.

### Pré-requisitos

O que você precisa para instalar o software:

- PHP 8 ou superior
- Composer
- MySQL ou PostgreSQL

### Instalação

Um passo a passo que informa como fazer um ambiente de desenvolvimento rodar:

Clone o repositório para sua máquina local:

```bash
git clone https://github.com/kurjata/project_cake.git
cd project-cake
```
Instale as dependências do composer:

```bash
composer install
```

Configure o banco de dados editando o arquivo config/app.php e defina as credenciais do seu banco de dados na seção Datasources.

Execute as migrations para criar as tabelas necessárias:

```bash
bin/cake migrations migrate
```

Inicie o servidor de desenvolvimento:

```bash
bin/cake server
```

Agora, acesse o localhost em seu navegador para ver a aplicação em execução.


## Contribuições são sempre bem-vindas!