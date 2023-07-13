# Use a imagem base do PHP com o Apache
FROM php:7.4-apache

# Defina o diretório de trabalho dentro do contêiner
WORKDIR /var/www/html

# Copie o código do projeto para o contêiner
COPY . /var/www/html

# Instale as dependências do PHP
RUN docker-php-ext-install pdo pdo_mysql

# Habilite o módulo do Apache para reescrever URLs
RUN a2enmod rewrite

# Configure as variáveis de ambiente do Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Atualize a configuração do Apache para usar o novo documento root
RUN sed -i -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Reinicie o serviço do Apache
RUN service apache2 restart

# Exponha a porta 80 para acessar a aplicação
EXPOSE 80
