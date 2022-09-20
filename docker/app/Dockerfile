FROM dolphiq/php81-composer-npm:latest

# Install YAML extension
RUN apt-get update -y
RUN apt-get install libyaml-dev -y
RUN pecl install yaml && echo "extension=yaml.so" > /usr/local/etc/php/conf.d/ext-yaml.ini && docker-php-ext-enable yaml