service mysql start
mysql --execute="CREATE DATABASE wordpress; \
				CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin'; \
				GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost'; \
				FLUSH PRIVILEGES;"

service php7.3-fpm start
service nginx start

bash