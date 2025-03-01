FROM oven/bun:latest

RUN mkdir /opt/health

COPY laravel /var/www
WORKDIR /var/www

RUN bun install --production

# command: see docker-compose
