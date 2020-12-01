service mysql start
service php7.3-fpm start
service nginx start

mysql -uroot -proot -e "CREATE USER 'mokellat'@'localhost' IDENTIFIED BY '123456'"
mysql -uroot -proot -e "CREATE DATABASE wordpress"
mysql -uroot -proot -e "GRANT ALL PRIVILEGES ON wordpress.* TO 'mokellat'@'localhost'"
mysql wordpress -u root --password=  < wordpress.sql
mysql -uroot -proot -e "FLUSH PRIVILEGES"

bash
