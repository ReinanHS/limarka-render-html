FROM reinanhs/php81-composer-npm

WORKDIR /var/www/html

COPY . ./
RUN echo ${RELEASE_TAG} > /var/www/html/VERSION

RUN composer install
RUN npm install --force

RUN chmod -R 777 "/var/www/html"
RUN npm run prod