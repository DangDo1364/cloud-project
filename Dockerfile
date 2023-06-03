# Use an official PHP image as the base image
FROM php:7.4-cli

RUN docker-php-ext-install mysqli

# Install necessary dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip

# Set the working directory in the container
WORKDIR /app

# Install Composer
COPY --from=composer:2.1 /usr/bin/composer /usr/bin/composer

# Copy the application files to the container
COPY . .

# Install dependencies
RUN composer install

# Run PHPUnit tests
CMD ["vendor/bin/phpunit"]
