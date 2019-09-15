FROM php:7.3-apache

#ファイルをコピー
COPY config/php.ini /usr/local/etc/php/
COPY src/ /var/www/html/

#コンテナのポートを公開
EXPOSE 80

# docker build -t xss_showcase .
# docker run -v -d -p 8000:80 --name xss xss_showcase
