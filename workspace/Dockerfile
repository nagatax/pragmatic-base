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
  && php -r "if (hash_file('sha384', 'composer-setup.php') === 'baf1608c33254d00611ac1705c1d9958c817a1a33bce370c0595974b342601bd80b92a3f46067da89e3b06bff421f182') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
  && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
  && php -r "unlink('composer-setup.php');" \
  && : "Install Laravel installer" \
  && composer global require "laravel/installer" \
  && : "Install redis driver" \
  && git clone https://github.com/phpredis/phpredis.git /usr/src/php/ext/redis \
  && docker-php-ext-install redis
