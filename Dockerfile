FROM ubuntu:latest

ENV DEBIAN_FRONTEND=noninteractive

RUN apt-get update && apt-get install -y --no-install-recommends \
    apache2 \
    php \
    libapache2-mod-php \
    php-mysql \
    mysql-server \
    ca-certificates

COPY default.conf /etc/apache2/sites-available/default.conf
COPY default-ssl.conf /etc/apache2/sites-available/default-ssl.conf

RUN a2enmod rewrite ssl && \
    a2ensite default.conf && \
    a2ensite default-ssl 


VOLUME ["/var/www/html", "/var/lib/mysql", "/etc/ssl/private"]

EXPOSE 80 443 3306

#COPY wp-config.php /var/www/html/wp-config.php
COPY start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

CMD ["/usr/local/bin/start.sh"]

