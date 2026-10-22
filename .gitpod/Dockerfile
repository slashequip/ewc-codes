FROM gitpod/workspace-mysql

USER root

RUN add-apt-repository ppa:ondrej/php && \
    install-packages php8.5 \
    php8.5-dev \
    php8.5-bcmath \
    php8.5-ctype \
    php8.5-curl \
    php8.5-dom \
    php8.5-gd \
    php8.5-intl \
    php8.5-mbstring \
    php8.5-mysql \
    php8.5-pgsql \
    php8.5-sqlite3 \
    php8.5-tokenizer \
    php8.5-xml \
    php8.5-zip && \
    update-alternatives --set php /usr/bin/php8.5

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

USER gitpod
