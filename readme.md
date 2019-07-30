<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Projeto Desktopper

Projeto para desenvolver um ambiente parecido com uma área de trabalho WEB para crianças.
## Começando

Essas instruções farão com que você tenha uma cópia do projeto em execução na sua máquina local para fins de desenvolvimento e teste..

### Pré-requisitos

Softwares usados
`` `
- Laragon
- Composer
- Git
- Visual Studio Code
- HeidiSQL
`` `

### Instalando

Copie o URL do repositório, abra o CMD, navegue até o diretório que deseja manter a pasta do projeto (C:\larago\www)

Digite o comando abaixo para clonar o projeto e cole o URL que copiou antes
`` `
Git clone URL
`` `

Entre na pasta do projeto pelo CMD

`` `
Cd api-chat
`` `	
Digite os comandos abaixo, um de cada vez e na ordem

`` `
Composer update
cp .env.example .env
Php artisan key:generate
`` `

*caso o comando Composer update de erro, use o comando “composer install”

Abra o heidiSQL crie uma nova conexão e um novo banco de dados chamado api-chat e configure seu arquivo .env com o nome do banco, usuário e senha de conexão.

Rode o comando abaixo para criar as tabelas no banco

`` `
Php artisan migrate
Php artisan serve
`` `

Acesse http://localhost:8000 
E seu app deve estar rodando.
