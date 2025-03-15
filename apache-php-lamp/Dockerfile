FROM ubuntu:22.04


#Instalar paquetes necesarios (apache php extensions php)
RUN apt update && \
    DEBIAN_FRONTEND=noninteractive TZ=Etc/UTC \
    apt install -y \
    apache2 libapache2-mod-php8.1 \
    curl \
    wget \
    git \
    && rm -rf /var/lib/apt/lists/* /var/cache/apt/*

RUN ln -sf /dev/stderr /var/log/apache2/error.log

RUN apt update && \
    apt install -y php8.1-mysql php-xml php-gd php-json php-curl php-zip php-intl php-mbstring

#Instalar composer

RUN curl -sS https://getcomposer.org/installer | php -- \
 --install-dir=/usr/local/bin --filename=composer

#Instalar ferramentas npm se son necesarias

EXPOSE 80
EXPOSE 443

#Activar módulos de apache

RUN a2enmod ssl
RUN a2enmod proxy proxy_http
RUN a2enmod rewrite


#Instrución para arrancar apache
CMD ["apache2ctl", "-D", "FOREGROUND"]