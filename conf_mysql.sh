service mysql restart
mysql -u root -e "CREATE DATABASE wordpress;"
mysql -u root -e "CREATE USER 'gverhelp'@'localhost' IDENTIFIED BY 'lol';"
mysql -u root -e "GRANT ALL ON wordpress.* TO 'gverhelp'@'localhost';"
mysql -u root -e "FLUSH PRIVILEGES;"
service nginx start && service php7.3-fpm start && service mysql restart
