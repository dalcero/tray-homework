
# PROVA PRÁTICA PARA PROGRAMADOR PHP II

### Passo a passo
Clone Repositório
```sh
git clone https://github.com/dalcero/tray-homework.git tray-homework
```

```sh
cd tray-homework/
```

Crie o Arquivo .env
```sh
cd tray-homework/
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME=Tray
APP_URL=http://localhost:8888


DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=tray
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
```


Suba os containers do projeto
```sh
docker-compose up -d
```


Acessar o container
```sh
docker-compose exec app bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto
```sh
php artisan key:generate
```


Executar as migrations
```sh
php artisan migration
```


Acesse o projeto
[http://localhost:8888](http://localhost:8888)