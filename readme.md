Instalacion den ubuntu 16.04.

INSTALACION DE APACHE2

sudo apt-get update
sudo apt-get install apache2
sudo ufw allow 'Apache Full'
sudo service apache2 status
sudo a2enmod rewrite
service apache2 restart

INSTALACION DE PHP 7.2 Y DRIVER DE CONEXIÓN A PostgreSQL

sudo apt-get install python-software-properties
sudo add-apt-repository -y ppa:ondrej/php
sudo apt-get update
sudo apt-get install php7.2
sudo apt-get install php-pear php7.2-curl php7.2-dev php7.2-gd php7.2-mbstring php7.2-zip  php7.2-xml
sudo apt-get install php-pgsql
sudo apt-get install php7.2-pgsql
php -v

INSTALACION DE CURL Y COMPOSER
sudo apt-get install curl
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
composer

INSTALACION DE LARAVEL
composer global require laravel/installer

INSTALACION DE BASE DE DATOS POSTGRESQL
sudo apt-get install postgresql postgresql-client postgresql-contrib libpq-dev
sudo apt-get install pgadmin3
sudo -h localhost -u postgres psql -d postgres -W
#Escribir estos comandos dentro de la base de datos
#alter user postgres with password 'tucontraseña';


CLONAR EL PROYECTO EN
cd /var/www/
git clone git@github.com:antonbautista/Kokonut_Store.git


CONFIGURACION DE PROYECTO DENTRO DE APACHE2

nano /etc/apache2/sites-available/000-default.conf 
    <VirtualHost *:80>

            ServerAdmin webmaster@localhost

            DocumentRoot /var/www/Kokonut_Store/public
            <Directory /var/www/Kokonut_Store/public>
                    Options Indexes FollowSymLinks MultiViews
                    AllowOverride All
                    Order allow,deny
                    allow from all
            </Directory>


            ErrorLog ${APACHE_LOG_DIR}/error.log
            CustomLog ${APACHE_LOG_DIR}/access.log combined

    </VirtualHost>

REINICIAR SERVIDOR
sudo service apache2 restart

INSTALAR DEPENDENCIAS DE LARAVEL
cd /var/www/Kokonut_Store
composer install

INSTALACION DE GUZZLE
composer require guzzlehttp/guzzle

PROPORCIONAR PERMISOS AL PROYECTO
chmod 777 -R /var/www/Kokonut_Store

CREAR EN POSTGRESQL UNA NUEVA BASE DE DATOS 
CREATE DATABASE kokonut;

REVISAR DATOS DE CONEXION EN  ARCHIVO .env DEL PROYECTO
Ejemplo:
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=kokonut
DB_USERNAME=usuario
DB_PASSWORD=sucontrasenia

INICIAR MIGRACIOIN DE BASE DE DATOS DEL PROYECTO
cd /var/www/Kokonut_Store
php artisan migrate

CARGAR DATOS POS DEFECTO
php artisan db:seed

ACCEDER DESDE EL NAVEGADOR DE SU PREFERENCIA
http://localhost

AUTENTICARSE CON SU USUARIO Y CONTRASEÑA
usuario:antonio@example.com
contraseña:123456578

CONSULTAR Y REGISTRAR PRODUCTOS DESDE POSTMAN
URL(Consultamos productos disponibles )
GET  http://localhost/api/products
headers
Content-Type      aplication/json

Bearer Token      91c3f6d839b1b97ddfa4138c4da9a2ff576bb5842848dcec602164a257979d48

----------------------------
URL (Registramos nuevos productos productos )
POST  http://localhost/api/products
headers
Content-Type      aplication/json

Bearer Token      91c3f6d839b1b97ddfa4138c4da9a2ff576bb5842848dcec602164a257979d48

Body   Row

{
	"product_name":"Monitor LED",
    "description":"LG 25UM58 2560 X 1080 Pixeles, color Negro",
    "total":2
}



gracias buen dia !!













