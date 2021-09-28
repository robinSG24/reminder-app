FROM studiographene/php-fpm-73-nginx:v2
COPY nginx.conf /etc/nginx/conf.d/default.conf
USER root
RUN apk add curl bash
COPY php.ini /etc/php7/php.ini
COPY php.ini /usr/local/etc/php/php.ini
COPY . /var/app/reminder
WORKDIR /var/app/reminder

USER root
RUN docker-php-ext-install exif
RUN docker-php-ext-configure exif \
            --enable-exif
RUN composer install --ignore-platform-reqs -vvv
RUN composer dump-autoload
RUN chown -Rf www-data:www-data /var/app/reminder/storage
RUN chown -Rf www-data:www-data /var/app/reminder/bootstrap
RUN chown -Rf www-data:www-data /var/app/reminder/public
RUN chmod -R 775 /var/app/reminder/storage
RUN chmod -R 775 /var/app/reminder/bootstrap
RUN chmod -R 775 /var/app/reminder/public
RUN php /var/app/reminder/artisan route:clear
