<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Controle de Tarefas

> Sistema de Cadastro de Tarefas utilizando laravel

## Baixar o projeto
Primeiro passo, clonar o projeto:
``` bash
# Clonar
git clone https://github.com/martinsllm/app_controle_tarefas.git

# Acessar
cd app_controle_tarefas
```

## Configuração

``` bash
# Instalar dependências do projeto
composer install

# Configurar variáveis de ambiente
cp .env.example .env
php artisan key:generate

# Criar migrations (tabelas)
php artisan migrate


## Configuração - Frontend
``` bash
# Atualizar dependências
npm install

# Rodar em ambiente local localhost:8080
npm run dev

# Rodar em ambiente de produção
npm run build
```
