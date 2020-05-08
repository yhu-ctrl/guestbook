FROM mariadb

ENV MYSQL_ROOT_PASSWORD guestbook
COPY create.sql /docker-entrypoint-initdb.d/