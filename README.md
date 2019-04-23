# projeto-exemplo

Projeto exemplo desenvolvido para avaliação de conhecimentos
# 

#

 - instalar pacotes
```
composer install

```

- faça uma cópia do arquivo `.env.example` com o nome `.env` e edite as credenciais do banco de dados e APP_URL

```
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=bancoDeDados
DB_USERNAME=usuario
DB_PASSWORD=senha
```
- gerar chave do laravel
```
php artisan key:generate
```


 - popular o banco de dados com alguns dados
```bash
php artisan migrate:fresh --seed
```


- rode o servidor
```bash
php artisan serve
```

- usuario padrão
>**email:** `usuario@teste.com`   
>**password:** `123456`
