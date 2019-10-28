FROM php:7.2-fpm

RUN apt-get update && apt-get -y install zlib1g-dev zip curl && rm -r /var/lib/apt/lists/*
RUN apt-get update && apt-get -y install ldap-utils libldap2-dev

RUN docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ && docker-php-ext-install ldap
RUN docker-php-ext-install pdo_mysql zip opcache

RUN pecl install apcu redis xdebug

RUN docker-php-ext-enable xdebug
RUN docker-php-ext-enable apcu && docker-php-ext-enable redis

COPY php.ini /usr/local/etc/php/php.ini

RUN curl --insecure https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN yes '' | pecl install -f xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.idekey=PHPSTORM" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_connect_back=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/xdebug.ini

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data
