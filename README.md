
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


Suba os containers do projeto
```sh
sudo docker-compose up -d nginx mysql phpmyadmin rabbitmq
```


Acessar o container
```sh
docker-compose exec workspace bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto
```sh
php artisan key:generate
```


Executar migrations e seeders
```sh
php artisan migration --seed
```

Executar Testes
```sh
php artisan test --filter SellerTest
php artisan test --filter SaleTest
```

Arquivo API para Postman
```sh
./TrayPostman.json
```


Acesse o projeto
[http://localhost](http://localhost)