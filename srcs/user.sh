mysql -uroot -proot -e "CREATE USER 'mokellat'@'localhost' IDENTIFIED BY '123456'"
mysql -uroot -proot -e "GRANT ALL PRIVILEGES ON *.* TO 'mokellat'@'localhost'"
mysql -uroot -proot -e "FLUSH PRIVILEGES"
bash