FROM geerlingguy/php-apache
RUN rm /var/www/html/index.html
COPY . /var/www/html/
COPY ./ports.conf /etc/apache2/ports.conf
COPY ./apache.conf /etc/apache2/sites-enabled/000-default.conf
