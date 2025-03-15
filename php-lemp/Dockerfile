FROM ubuntu:22.04


#Instalar paquetes necesarios (apache php extensions php)
RUN apt update && \
    DEBIAN_FRONTEND=noninteractive TZ=Etc/UTC \
    apt install -y \
    php8.1-fpm \
    curl \
    wget \
    git \
    && rm -rf /var/lib/apt/lists/* /var/cache/apt/*


RUN apt update && \
    apt install -y php8.1-mysql php-xml php-gd php-json php-curl php-zip php-intl php-mbstring

#Instalar composer

RUN curl -sS https://getcomposer.org/installer | php -- \
 --install-dir=/usr/local/bin --filename=composer

#Instalar ferramentas npm se son necesarias

EXPOSE 9000

#Instrución para arrancar apache
# CMD ["apache2ctl", "-D", "FOREGROUND"]
CMD ["php-fpm8.1", "-F"]