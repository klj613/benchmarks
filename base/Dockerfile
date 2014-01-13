FROM klj613_centos6/base

RUN yum update -y && yum upgrade -y
RUN yum install -y supervisor nginx git

RUN rm -rf /etc/nginx/conf.d/*
RUN mkdir -p /etc/php.d/
RUN echo "date.timezone = \"UTC\"" | tee /etc/php.d/timezone.ini

EXPOSE 80

ADD ./supervisord.conf /etc/supervisord.conf
ADD ./docker_bootstrap.sh /docker_bootstrap

CMD ["/docker_bootstrap", "-n"]
