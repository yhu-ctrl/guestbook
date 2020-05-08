FROM mariadb

COPY create.sql /docker-entrypoint-initdb.d/

