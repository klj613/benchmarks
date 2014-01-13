FROM klj613_benchmark/base

RUN yum install -y php55u-devel php55u php55u-fpm php55u-pecl-jsonc php55u-opcache
RUN echo "listen = /var/run/php5-fpm.sock" >> /etc/php-fpm.d/www.conf
ADD ./nginx.conf /etc/nginx/conf.d/www.conf

RUN yum install -y gcc libtool
ADD ./cphalcon /tmp/phalcon
RUN cd /tmp/phalcon/build && ./install
RUN echo "extension=phalcon.so" >> /etc/php.d/phalcon.ini

ADD ./app.ini /etc/php.d/zzz-app.ini

ADD ./app /srv/www
RUN cd /srv/www && /srv/www/bin/composer.phar install --dev --optimize-autoloader
