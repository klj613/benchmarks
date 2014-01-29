FROM klj613_benchmark/base

RUN yum install -y php55u php55u-fpm php55u-pecl-jsonc php55u-opcache php55u-mcrypt php55u-pdo
RUN echo "listen = /var/run/php5-fpm.sock" >> /etc/php-fpm.d/www.conf
ADD ./nginx.conf /etc/nginx/conf.d/www.conf

ADD ./app.ini /etc/php.d/zzz-app.ini

ADD ./app /srv/www
RUN cd /srv/www && /srv/www/bin/composer.phar install --dev --optimize-autoloader && ./artisan optimize
RUN chown -R apache:apache /srv/www/app/storage
