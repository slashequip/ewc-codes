FROM gitpod/workspace-mysql

USER root

RUN add-apt-repository ppa:ondrej/php && \
    install-packages php8.1 && \
    update-alternatives --set php /usr/bin/php8.1

USER root

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php --install-dir /usr/bin --filename composer && \
    php -r "unlink('composer-setup.php');"

USER gitpod