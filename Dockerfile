FROM php:7.4-cli-buster

RUN apt -y update && apt -y upgrade
RUN apt search libxslt1.1
RUN apt -y install figlet git zip unzip libxslt1-dev libxslt1.1

# alter bash prompt
ENV PS1A="\u@php_travis_enhancer.test:\w> "
RUN echo 'PS1=$PS1A' >> ~/.bashrc

# intro message when attaching to shell
RUN echo 'figlet -w 120 Prev Next Sibling' >> ~/.bashrc

# install composer - see https://medium.com/@c.harrison/speedy-composer-installs-in-docker-builds-41eea6d0172b
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer && \
    composer global require hirak/prestissimo --no-plugins --no-scripts

# Missing PHP extensions
RUN docker-php-ext-install mysqli && docker-php-ext-install xsl

# Cleanup
RUN apt-get -y autoremove && apt-get -y clean

# Prevent the container from exiting
CMD tail -f /dev/null

