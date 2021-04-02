FROM php:7.0-fpm-stretch as simplesamlphp

RUN echo "deb http://deb.debian.org/debian stretch main non-free" > /etc/apt/sources.list \
    && apt-get update \
    && apt-get install -y \
        apt-transport-https \
        ca-certificates \
        gnupg2 \
    && apt-get update \
    && apt-get install -y --no-install-recommends \
        zlib1g-dev \
        git \
        ghostscript \
        libfreetype6-dev \
        libicu-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libssl-dev \
        libxslt-dev \
        locales \
        gettext \
        mcrypt \
        unzip \
        zlib1g-dev \
        libfreetype6-dev \
        libldap2-dev \ 
        nano \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-configure ldap --with-libdir=lib/x86_64-linux-gnu/ \
    && docker-php-ext-install -j$(nproc) ldap \
    && docker-php-ext-install zip exif iconv mbstring pcntl sockets xsl intl pdo_mysql gettext bcmath mcrypt \
    && pecl install \
        redis \
    && docker-php-ext-enable redis \
    && pecl clear-cache \
    && docker-php-source delete \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists \
    && mkdir /entrypoint /var/simplesamlphp \
    && useradd -u 1000 app \
    && mkdir -p /home/app/.composer \
    && chown -R app: /home/app /var/simplesamlphp

COPY  --chown=app  . /var/simplesamlphp
WORKDIR /var/simplesamlphp
ENTRYPOINT []
CMD ["php-fpm", "-F"]

#########################################################################
# simplesamlphp-nginx
#########################################################################

FROM nginx:1.17.8-alpine as simplesamlphp-nginx
RUN adduser --uid 1000 --disabled-password app
ADD ./docker/nginx/root /
COPY  --chown=app  . /var/simplesamlphp

ENTRYPOINT ["/entrypoint.sh"]

CMD ["nginx", "-g", "daemon off;"]
HEALTHCHECK CMD wget --spider http://127.0.0.1/login || nginx -s reload || exit 1

