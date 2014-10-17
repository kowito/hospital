# Cospital CI
Hospital CI By OSGD


##Installation instruction

###Install Linux Package
yum install mysql-server apache2 libapache2-mod-php5 php5-cli php5-mcrypt git

###create database and user grant permission for database user
CREATE DATABASE hp_db;
CREATE USER 'hp_db'@'localhost' IDENTIFIED BY 'hp_db';
GRANT ALL PRIVILEGES ON hp_db.* To 'hp_db'@'localhost' IDENTIFIED BY 'hp_db';

###make projects directory and checkout sourcecode from github
mkdir ~/Projects && cd ~/Projects
git clone https://github.com/kowito/hospital.git

###Install Composer dependency manager for PHP 
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

###install project dependency libraly
composer update

###create database schema and seed data
php artisan migrate
php artisan db:seed

###give permission to write logs
sudo chown -R www-data:www-data ~/Projects/hospital/app/storage/
###or
sudo chmod -R 666 ~/Projects/hospital/app/storage/

###setup apache virtualhost please change ServerName, ServerAdmin, DocumentRoot
<VirtualHost *:80>
    ServerName hospital-ci.pnxstudio.com
    ServerAdmin webmaster@localhost
    DocumentRoot /home/ubuntu/Projects/hospital/public
    <Directory /home/ubuntu/Projects/hospital/public>
        AllowOverride All
        Require all granted
        Options FollowSymLinks MultiViews
        
    </Directory>
    ErrorLog ${APACHE_LOG_DIR}/error.log
    LogLevel warn
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>

##Update to new version
cd ~/Projects
git pull
composer update
php artisan migrate