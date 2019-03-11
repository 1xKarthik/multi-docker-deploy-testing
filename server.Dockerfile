FROM nginx
COPY ./ /var/www
COPY ./default.conf /etc/nginx/conf.d/default.conf
EXPOSE 80