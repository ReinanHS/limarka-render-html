FROM reinanhs/php81-composer-npm
WORKDIR /var/www/html

COPY composer.json composer.lock ./
RUN composer install

COPY *.php configuracao.yaml ./
COPY source ./source

CMD vendor/bin/jigsaw build