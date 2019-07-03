FROM php:7.3-apache

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"

# The man is the only thing that a man needs.
RUN apt update; apt install -y man

# Postgresql support
RUN apt install -y libpq-dev
RUN docker-php-ext-install pgsql

# Copy from the base image of php apache
ENTRYPOINT ["docker-php-entrypoint"]
WORKDIR /var/www/html
CMD ["apache2-foreground"]
