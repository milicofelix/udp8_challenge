
# Setup Docker Para Projetos Laravel 8

### Passo a passo
Clone Repositório
```sh
git clone git@github.com:milicofelix/udp8_challenge.git
```

```sh
cd udp8_challenge/
```


Crie o Arquivo .env
```sh
cp .env.example .env
```


Atualize as variáveis de ambiente do arquivo .env
```dosini
APP_NAME="upd8"
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=upd8
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
docker compose up -d
```


Acessar o container
```sh
docker exec -it laravel-app-app-1 bash
```


Instalar as dependências do projeto
```sh
composer install
```


Gerar a key do projeto Laravel
```sh
php artisan key:generate
```

Executar as migrations do projeto Laravel
```sh
php artisan migrate
```

Executar as seeders do projeto Laravel para popular o banco de dados
```sh
php artisan db:seed
```

Acessar o projeto FRONT
[http://localhost:8000](http://localhost:8000)

Acessar o PhpMyAdmin
[http://localhost:8080/](http://localhost:8080/)

Endpoints da API

```sh
GET     - http://localhost:8000/api/v1/clientes
GET     - http://localhost:8000/api/v1/clientes/50
POST    - http://localhost:8000/api/v1/clientes
PUT     - http://localhost:8000/api/v1/clientes/1
DELETE  - http://localhost:8000/api/v1/clientes/5
```

```sh
Payloads POST e PUT

{
  "nome": "João Sem Braço",
  "cpf": "29580932842",
  "data_nascimento": "1981-08-08",
  "sexo":"M",
  "email": "joao.sb@gmail.com",
  "telefone": "(11) 95960-7030",
  "endereco": "Rua João das Couves, 55 Apto 77 - Parque Dourado",
  "cidade": "Ferraz de Vasconcelos",
  "estado": "SP"
}
```



