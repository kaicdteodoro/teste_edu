FROM phpdockerio/php:8.1-fpm
WORKDIR "/app"

RUN apt-get update; \
    apt-get -y --no-install-recommends install \
        git \
        php8.1-mysql \
        php8.1-redis \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libjpeg-dev; \
    apt-get clean; \
    docker-php-ext-configure gd \
      --with-gd \
      --with-jpeg-dir \
      --with-png-dir \
      --with-zlib-dir \
      --with-freetype-dir=/usr/include/ \
     --with-jpeg-dir=/usr/include/ ;\
     docker-php-ext-install -j$(nproc) gd;\
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

