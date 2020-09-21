PRIMEIRO INSTALE O PROJETO
Entre na pasta CENSUPEG

# composer install

# Renomei .env.example para .env
  Altere as linhas 9,10,11,12,13,14

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=censupeg
DB_USERNAME=root
DB_PASSWORD=26031949Pa!

Crie a chave do Aplicativo

# php artisan key:generate 

Rode as Migration

# php artisan migrate:refresh

#PARA REGISTRAR UM NOVO USUARIO ENTRE NA ROTA

localhost/register
