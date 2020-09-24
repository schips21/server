FROM debian:buster

RUN	apt-get -y update && apt-get -y upgrade && apt-get -y install vim \
	openssl wget nginx wordpress php7.3 php7.3-fpm \
	php7.3-mbstring php7.3-gd php7.3-mysql \
	default-mysql-server php7.3-xml php7.3-xmlrpc \
	php-curl php-intl php-soap php-zip

COPY		/srcs/bash.sh /
COPY		/srcs/default /etc/nginx/sites-available/nginx.conf
COPY		/srcs/autoindex_change.sh /

RUN mkdir /var/www/schips

#wordpress
RUN wget https://wordpress.org/latest.tar.gz
RUN tar -xzvf latest.tar.gz
RUN mv wordpress/ /var/www/schips
COPY /srcs/wp-config.php /var/www/schips/wordpress

#phpmyadmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/5.0.2/phpMyAdmin-5.0.2-english.tar.gz
RUN tar -xzvf phpMyAdmin-5.0.2-english.tar.gz
RUN mv phpMyAdmin-5.0.2-english/ /var/www/schips/phpmyadmin
COPY /srcs/config.inc.php /var/www/schips/phpmyadmin
RUN ln -s /etc/nginx/sites-available/nginx.conf ./etc/nginx/sites-enabled/
RUN rm /etc/nginx/sites-enabled/default
RUN chown -R www-data:www-data /var/*
RUN chmod -R 777 /var/*
RUN chmod -R 755 /var/www/schips/phpmyadmin

#ssl
RUN openssl req \
		-newkey rsa:2048 -nodes -keyout local_host.key \
		-x509 -days 365 -out local_host.crt \
		-subj "/C=RU/ST=Moscow/L=21/O=21/OU=schips/CN=localhost"

EXPOSE 80 443
ENTRYPOINT bash	bash.sh