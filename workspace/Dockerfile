FROM php:7.3-fpm-alpine3.8

# Use the default production configuration
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

# Override with custom opcache settings
#COPY config/opcache.ini $PHP_INI_DIR/conf.d/

# Install PHP extentions
RUN set -x; \
    : "Upgrade system's packages" \
  && apk upgrade --update \
  && apk --no-cache add \
  && : "Install some related packages" \
  && apk add autoconf icu-dev gcc git g++ make perl-dev pcre-dev zlib-dev openssl-dev libzip-dev \
  && : "Install some PHP extentions" \
  && docker-php-ext-install -j$(nproc) bcmath ctype iconv intl json mbstring opcache pdo pdo_mysql tokenizer zip \
  && pecl install xdebug-2.7.0beta1 \
  && docker-php-ext-enable xdebug \
  && : "Install composer" \
  && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
  && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
  && php -r "unlink('composer-setup.php');" \
  && : "Install Laravel installer" \
  && composer global require "laravel/installer" \
  && : "Install redis driver" \
  && git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis \
  && docker-php-ext-install redis
