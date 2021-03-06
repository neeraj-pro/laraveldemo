FROM alpine:edge

RUN echo "http://dl-cdn.alpinelinux.org/alpine/edge/testing" >> /etc/apk/repositories

RUN set -x ; \
    addgroup -g 1000 -S www-data ; \
    adduser -u 1000 -D -S -G www-data www-data && exit 0 ; exit 1

RUN apk update \
    && apk upgrade \
    && apk add bash apache2 php7-apache2 curl ca-certificates openssl php7 php7-phar php7-json php7-iconv php7-openssl tzdata nano \
    && update-ca-certificates \
    && apk add \
    php7-ftp \
    php7-xdebug \
    php7-mcrypt \
    php7-mbstring \
    php7-soap \
    php7-gmp \
    php7-pdo_odbc \
    php7-dom \
    php7-pdo \
    php7-zip \
    php7-mysqli \
    php7-sqlite3 \
    php7-pdo_pgsql \
    php7-bcmath \
    php7-gd \
    php7-odbc \
    php7-pdo_mysql \
    php7-pdo_sqlite \
    php7-gettext \
    php7-xml \
    php7-xmlreader \
    php7-xmlwriter \
    php7-tokenizer \
    php7-xmlrpc \
    php7-bz2 \
    php7-pdo_dblib \
    php7-curl \
    php7-ctype \
    php7-session \
    php7-redis \
    php7-exif \
    php7-intl \
    php7-fileinfo \
    php7-ldap \
    php7-apcu \
    php7-simplexml \
    && rm -f /var/cache/apk/* \
    && cp /usr/bin/php7 /usr/bin/php \
    && curl -sS https://getcomposer.org/installer | php7 -- --install-dir=/usr/local/bin --filename=composer && \
    mkdir /app && chmod a+rwx /app && \
    chmod a+rwx /run/apache2/ && \
    mkdir /.composer && chmod a+rwx /.composer && \
    mkdir -p /.config/psysh && chmod a+rwx /.config/psysh

# Apache config
ADD httpd.conf /etc/apache2/httpd.conf

# Run scripts
ADD scripts/run.sh /scripts/run.sh

RUN mkdir /scripts/pre-exec.d && \
    mkdir /scripts/pre-init.d && \
    chmod -R 755 /scripts && chmod a+rw /etc/passwd && \
    chown -R www-data:www-data /scripts

# Your app
ADD . /app
WORKDIR /app
RUN composer install --no-dev --optimize-autoloader \
    && chown -R www-data:www-data vendor \
    && php artisan cache:clear \
    && chown -R www-data:www-data storage \
    && chmod -R 777 storage \
    && chown -R www-data:www-data bootstrap/cache \
    && chmod -R 777 bootstrap/cache \
    && cp .env.example .env \
    && php artisan key:generate && php artisan config:cache && php artisan view:cache

EXPOSE 8080
USER www-data

ENTRYPOINT ["/scripts/run.sh"]

# Set labels used in OpenShift to describe the builder images
LABEL io.k8s.description="Alpine linux based Apache PHP7 Container" \
    io.k8s.display-name="alpine apache php7" \
    io.openshift.expose-services="8080:http" \
    io.openshift.tags="builder,html,apache,php7" \
    io.openshift.min-memory="1Gi" \
    io.openshift.min-cpu="1" \
    io.openshift.non-scalable="false"
