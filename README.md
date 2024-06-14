este README foi escrito em [markdown](https://www.markdownguide.org/basic-syntax/)

# Passo 1 - instalar projeto num novo computador caso ja esteja instalado seguir para o passo 2

## copiar repositorio para o computador
```sh
git clone colocar_o_link_do_repositorio
```

## instalar bibliotecas da pasta vendor do composer
```sh
composer install
```

## instalar bibliotecas da pasta node_module do nodejs
```sh
npm install
```

## se iniciarmos o laravel aparece um erro 500 e necessario criar o ficheiro .env
```sh
cp .env.example .env
```

## gerar key para o laravel ter sistema de encriptacao
```sh
php artisan key:generate
```

## alterar estes campos do ficheiro .env para fazer ligacao a base de dados
```sh
DB_DATABASE=NOME_DA_BASE_DADOS
DB_USERNAME=SELECIONAR_UTILIZADOR_DA_BASE_DE_DADOS
DB_PASSWORD=SELECIONAR_PASSWORD_DA_BASE_DE_DADOS
```

## seguir para o passo iniciar projeto

# Passo 2 - se ja existe projeto no computador entao e so atualizar

## atualizar codigo do github
```sh
git pull
```

## verficar se ha alteracoes no ficheiro composer.json e fazer download dos ficheiros da pasta vendor a partir do composer
```sh
composer install
```

# Passo 3 -  iniciar projeto

## os uploads de ficheiro (jogos zip) vao para pasta storage mas para permitir o download e acesso a partir da pasta public do laravel e necessario criar um atalho (fazer isto apenas uma vez)
```sh
php artisan storage:link
```

## instalar base de dados removendo a atual e inserido registos
```sh
php artisan migrate:fresh --seed
```

## iniciar servidor com o laravel e serviço de hotreload
```sh
php artisan serve
npm run dev
```

# bibliotecas utilizadas
* laravel/ui
* zanysoft/laravel-zip
* lukepolo/laracart

## instalar laravel/ui

### instalar pacote laravel/ui (instala um sistema de login) - isto so se faz um vez como ja eu o fiz nao e necessario fazer novamente. mas fica os comandos para aprenderes
```sh
composer require laravel/ui
```

### instalar o bootstrap e gerar html do login
```sh
php artisan ui bootstrap --auth
```

### gerar ficheiros CSS e JS compilados - ATENCAO necessario instalar o nodejs https://nodejs.org/en para ter o comando npm
```sh
npm install && npm run build
```

## instalar pacote de zip para descomprimir ficheiros zip
```sh
composer require zanysoft/laravel-zip
```

### fazer isto apenas um vez em cada pc onde o projecto esta, permitir o zip no PHP editar ficheiro php.ini no xampp
```sh
procurar por zip e remover o ; no inicio da linha
```

### fazer isto apenas um vez em cada pc onde o projecto esta, permitir o upload de ficheiros maiores que 50 megas no PHP editar ficheiro php.ini no xampp
```sh
upload_max_filesize 50M
```

## documentacao para lukepolo/laracart

[documentacao para o carrinho de compras](https://laracart.lukepolo.com/master/getting-started)

# configurar o projeto para site de internet atravez do cpanel

## exportar base de dados phpmyadmin e importar no phpmyadmin do cpanel

## configurar o servidor, permitir o zip no PHP editar ficheiro php.ini
```sh
procurar por zip e remover o ; no inicio da linha
```
# configurar o servidor, permitir o upload de ficheiros maiores que 50 megas no PHP editar ficheiro php.ini
```sh
upload_max_filesize 50M
```

## antes de copiar os ficheiros do projeto para o webserver do cpanel exportar os ficheiros CSS e JS compilados
```sh
npm install && npm run build
```

## utilizar este link no servidor cpanel parar criar link do storage
[http://link-do-site/criar-atalho-storage-no-cpanel](http://link-do-site/criar-atalho-storag-no-cpanel)
