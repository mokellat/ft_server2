
# get image
FROM debian:buster

# install tools
RUN	echo "debut d'installation------------------"
RUN apt update
RUN apt upgrade -y
RUN apt install nginx -y
RUN apt install wget -y
RUN wget http://repo.mysql.com/mysql-apt-config_0.8.13-1_all.deb
RUN apt install lsb-release -y
RUN	apt install gnupg -y
RUN	dpkg -i mysql-apt-config_0.8.13-1_all.deb
RUN	apt update
RUN	apt install default-mysql-server -y
RUN	apt update
RUN	apt -y install php php-cli php-fpm php-json php-pdo php-mysql php-zip php-gd  php-mbstring php-curl php-xml php-pear php-bcmath
RUN	apt-get install -y libnss3-tools
RUN	echo "Fin d'installation --------------------"
#mysql config
RUN	echo "debut ---------------------------------"
COPY srcs/user.sh /
RUN	echo "fin ----------------------------------"
#phpmyadmin config
RUN	echo "debut --------------------------------"
RUN	cd /tmp
WORKDIR /var/www/html/
RUN	wget https://files.phpmyadmin.net/phpMyAdmin/4.9.2/phpMyAdmin-4.9.2-english.tar.gz
RUN	tar xf phpMyAdmin-4.9.2-english.tar.gz
RUN	mv phpMyAdmin-4.9.2-english phpmyadmin
RUN	echo "Fin-----------------------------------"
#wordpress config
RUN	echo "debut ---------------------------------"
WORKDIR /var/www/html/
RUN	wget https://wordpress.org/latest.tar.gz
RUN	tar xf latest.tar.gz
COPY srcs/wp-config.php /var/www/html/wordpress/
RUN	echo "Fin ----------------------------------------"
#nginix user
RUN	echo "debut -----------------------------------"
COPY srcs/default /etc/nginx/sites-available/default
RUN	echo "Fin ---------------------------------------"
COPY srcs/wordpress.sql ./
#RUN ./srcs/services.sh
# i need a comment here
	#rm -rf /var/lib/apt/lists/*
# keep move
#CMD tail -f /dev/null
#RUN chmod +x /user.sh
CMD sh /user.sh
