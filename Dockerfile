FROM dmstr/php-yii2:7.1-fpm-3.0-beta3-alpine-nginx-xdebug

COPY ./image-files /

# TODO: Remove when Patched plugin with skip-update
RUN rm -rf ~/.composer/vendor && composer global install

# Application packages
WORKDIR /app
COPY composer.* /app/
RUN composer install --prefer-dist --optimize-autoloader && \
    composer clear-cache

# Application source-code
COPY yii /app/
COPY ./web /app/web/
COPY ./src /app/src/
RUN cp src/app.env-dist src/app.env

# Permissions
RUN mkdir -p runtime web/assets web/bundles /mnt/storage && \
    chmod -R 775 runtime web/assets /mnt/storage && \
    chmod -R ugo+r /root/.composer/vendor && \
    chown -R www-data:www-data runtime web/assets /root/.composer/vendor /mnt/storage && \
    APP_NAME=build APP_LANGUAGES=en yii asset/compress src/config/assets.php web/bundles/config.php

# Install crontab from application config (
RUN crontab src/config/crontab

VOLUME /mnt/storage