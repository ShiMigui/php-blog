FROM php:8.1-apache

WORKDIR /app

COPY . .

# Configure Apache to set /view/index.php as the entry point
RUN echo "DocumentRoot /app/view" > /etc/apache2/sites-available/000-default.conf && \
    echo "<Directory /app/view>" >> /etc/apache2/sites-available/000-default.conf && \
    echo "    Options Indexes FollowSymLinks" >> /etc/apache2/sites-available/000-default.conf && \
    echo "    AllowOverride All" >> /etc/apache2/sites-available/000-default.conf && \
    echo "    Require all granted" >> /etc/apache2/sites-available/000-default.conf && \
    echo "</Directory>" >> /etc/apache2/sites-available/000-default.conf && \
    echo "<Files index.php>" >> /etc/apache2/sites-available/000-default.conf && \
    echo "    Require all granted" >> /etc/apache2/sites-available/000-default.conf && \
    echo "</Files>" >> /etc/apache2/sites-available/000-default.conf

EXPOSE 80