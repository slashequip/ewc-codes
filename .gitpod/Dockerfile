# Dazzle do not supports ARG TRIGGER_REBUILD=2
FROM gitpod/workspace-base:latest

### Apache, PHP and Nginx ###
LABEL dazzle/layer=tool-nginx
LABEL dazzle/test=tests/lang-php.yaml
USER root
ENV TRIGGER_REBUILD=4
RUN add-apt-repository -y ppa:ondrej/php \
    && install-packages \
        apache2 \
        nginx \
        nginx-extras \
        composer \
        php8.1 \
        php8.1-dev \
        php8.1-bcmath \
        php8.1-ctype \
        php8.1-curl \
        php8.1-gd \
        php8.1-intl \
        php8.1-mbstring \
        php8.1-mysql \
        php8.1-pgsql \
        php8.1-sqlite3 \
        php8.1-tokenizer \
        php8.1-xml \
        php8.1-zip \
    && mkdir -p /var/run/nginx \
    && ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/rewrite.load \
    && chown -R gitpod:gitpod /etc/apache2 /var/run/apache2 /var/lock/apache2 /var/log/apache2 \
    && chown -R gitpod:gitpod /etc/nginx /var/run/nginx /var/lib/nginx/ /var/log/nginx/
COPY --chown=gitpod:gitpod apache2/ /etc/apache2/
COPY --chown=gitpod:gitpod nginx /etc/nginx/

## The directory relative to your git repository that will be served by Apache / Nginx
ENV APACHE_DOCROOT_IN_REPO="public"
ENV NGINX_DOCROOT_IN_REPO="public"

### Homebrew ###
LABEL dazzle/layer=tool-brew
LABEL dazzle/test=tests/tool-brew.yaml
USER gitpod
# Dazzle does not rebuild a layer until one of its lines are changed. Increase this counter to rebuild this layer.
ENV TRIGGER_BREW_REBUILD=5
RUN mkdir ~/.cache && /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
ENV PATH=$PATH:/home/linuxbrew/.linuxbrew/bin:/home/linuxbrew/.linuxbrew/sbin/
ENV MANPATH="$MANPATH:/home/linuxbrew/.linuxbrew/share/man"
ENV INFOPATH="$INFOPATH:/home/linuxbrew/.linuxbrew/share/info"
ENV HOMEBREW_NO_AUTO_UPDATE=1

RUN sudo apt remove -y cmake \
    && brew install cmake

### Node.js ###
LABEL dazzle/layer=lang-node
LABEL dazzle/test=tests/lang-node.yaml
USER gitpod
ENV NODE_VERSION=16.13.0
ENV TRIGGER_REBUILD=1
RUN curl -fsSL https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.0/install.sh | PROFILE=/dev/null bash \
    && bash -c ". .nvm/nvm.sh \
        && nvm install $NODE_VERSION \
        && nvm alias default $NODE_VERSION \
        && npm install -g typescript yarn node-gyp" \
    && echo ". ~/.nvm/nvm-lazy.sh"  >> /home/gitpod/.bashrc.d/50-node
# above, we are adding the lazy nvm init to .bashrc, because one is executed on interactive shells, the other for non-interactive shells (e.g. plugin-host)
COPY --chown=gitpod:gitpod nvm-lazy.sh /home/gitpod/.nvm/nvm-lazy.sh
ENV PATH=$PATH:/home/gitpod/.nvm/versions/node/v${NODE_VERSION}/bin

### Docker ###
LABEL dazzle/layer=tool-docker
LABEL dazzle/test=tests/tool-docker.yaml
USER root
ENV TRIGGER_REBUILD=3
# https://docs.docker.com/engine/install/ubuntu/
RUN curl -o /var/lib/apt/dazzle-marks/docker.gpg -fsSL https://download.docker.com/linux/ubuntu/gpg \
    && apt-key add /var/lib/apt/dazzle-marks/docker.gpg \
    && add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable" \
    && install-packages docker-ce docker-ce-cli containerd.io

RUN curl -o /usr/bin/slirp4netns -fsSL https://github.com/rootless-containers/slirp4netns/releases/download/v1.1.12/slirp4netns-$(uname -m) \
    && chmod +x /usr/bin/slirp4netns

RUN curl -o /usr/local/bin/docker-compose -fsSL https://github.com/docker/compose/releases/download/1.29.2/docker-compose-Linux-x86_64 \
    && chmod +x /usr/local/bin/docker-compose

# https://github.com/wagoodman/dive
RUN curl -o /tmp/dive.deb -fsSL https://github.com/wagoodman/dive/releases/download/v0.10.0/dive_0.10.0_linux_amd64.deb \
    && apt install /tmp/dive.deb \
    && rm /tmp/dive.deb


### MySQL ###
USER root
RUN install-packages mysql-server \
 && mkdir -p /var/run/mysqld /var/log/mysql \
 && chown -R gitpod:gitpod /etc/mysql /var/run/mysqld /var/log/mysql /var/lib/mysql /var/lib/mysql-files /var/lib/mysql-keyring /var/lib/mysql-upgrade

# Install our own MySQL config
COPY --chown=gitpod:gitpod mysql/mysql.cnf /etc/mysql/mysql.conf.d/mysqld.cnf
COPY --chown=gitpod:gitpod mysql/client.cnf /etc/mysql/mysql.conf.d/client.cnf
COPY --chown=gitpod:gitpod ./mysql/mysql-bashrc-launch.sh /etc/mysql/mysql-bashrc-launch.sh

USER gitpod

RUN echo "/etc/mysql/mysql-bashrc-launch.sh" >> ~/.bashrc