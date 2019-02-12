FROM mysql:5.7.22
COPY ./mysql/my.cnf /etc/mysql/my.cnf
ENV MYSQL_DATABASE=homestead
ENV MYSQL_ROOT_PASSWORD=secret
EXPOSE 3306