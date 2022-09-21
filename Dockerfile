FROM reinanhs/php81-composer-npm

WORKDIR /var/www/html

COPY . ./

RUN composer install
RUN npm install --force

RUN chmod -R 777 "/var/www/html"
RUN npm run prod