FROM dunglas/frankenphp:php8.4
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apt update && \ 
    apt install --no-install-recommends -y git unzip 7zip
RUN install-php-extensions pcntl

ENV BUN_INSTALL="/opt/bun"
ENV PATH="$BUN_INSTALL/bin:$PATH"
RUN curl -fsSL https://bun.sh/install | bash

# copy required for dependency installs, app is mounted later as well
COPY app /var/www

ARG USER=laravel
# https://frankenphp.dev/docs/docker/#running-as-a-non-root-user
RUN \
	groupadd --gid 1050 ${USER} && \
    useradd -u 1050 -g 1050 ${USER}; \
	# Add additional capability to bind to port 80 and 443
	setcap CAP_NET_BIND_SERVICE=+eip /usr/local/bin/frankenphp; \
	# Give write access to /data/caddy and /config/caddy
	chown -R ${USER}:${USER} /data/caddy && \
    chown -R ${USER}:${USER} /config/caddy
    # chown -R ${USER}:${USER} /var/www && \
    # chmod -R 770 /var/www

# USER ${USER} # <- user is switched in entrypoint.sh

WORKDIR /var/www

RUN composer install && bun install

RUN php artisan octane:install --server=frankenphp

# command: see docker-compose
