FROM gitpod/workspace-mysql

USER root

RUN composer self-update

RUN add-apt-repository ppa:ondrej/php && \
    install-packages php8.1 && \
    update-alternatives --set php /usr/bin/php8.1

USER gitpod