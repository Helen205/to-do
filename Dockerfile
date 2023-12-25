FROM php:7.4-apache

# PHP eklentilerini yükle
RUN docker-php-ext-install pdo pdo_mysql

# Uygulama dosyalarını kopyala
COPY ./appp /var/www/html/

# Apache yapılandırması
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Portu aç
EXPOSE 80
