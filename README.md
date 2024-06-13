# coisas a fazer para ter o projecto atualizado e a funcionar

## para receber as minhas modificacoes do codigo
```sh
git pull
```

## verficar se ha alteracoes no ficheiro composer.json e fazer download dos ficheiros da pasta vendor a partir do composer
```sh
composer update
```

## atualizar a base de dados com um utilizador admin
```sh
php artisan migrate:fresh --seed
```

## ativar laravel
```sh
php artisan serve
```

# bibliotecas utilizadas
* laravel/ui
* zanysoft/laravel-zip

## instalar Scaffolding/Andaimes do login

### instalar pacote laravel/ui (instala um sistema de login) - isto so se faz um vez como ja eu o fiz nao e necessario fazer novamente. mas fica os comandos para aprenderes
```sh
composer require laravel/ui
```

### instalar o bootstrap e gerar html do login
```sh
php artisan ui bootstrap --auth
```

### e necessario instalar o nodejs https://nodejs.org/en para ter o comando npm
```sh
npm install && npm run build
```

## instalar pacote de zip para descomprimir ficheiros zip
```sh
composer require zanysoft/laravel-zip
```

# fazer isto apenas um vez em cada pc onde o projecto esta, permitir o upload de ficheiros maiores que 50 megas no PHP editar ficheiro php.ini no xampp
```sh
upload_max_filesize 50M
```

# os uploads de ficheiro (jogos zip) vao para pasta storage mas para permitir o download e acesso a partir da pasta public do laravel e necessario criar um atalho
```sh
php artisan storage:link
```
# utilizar este link no servidor cpanel visto que nao e possivel fazer o comando acima
[http://localhost:8000/criar-atalho-storag-no-cpanel](http://localhost:8000/criar-atalho-storag-no-cpanel)
