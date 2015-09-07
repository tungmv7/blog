FROM php:5.6-fpm

# base
RUN buildRequirements="curl wget" \
	&& apt-get update && apt-get install -y ${buildRequirements} \
	&& rm -rf /var/lib/apt/lists/*

# gd
RUN buildRequirements="libpng12-dev libjpeg-dev libfreetype6-dev" \
	&& apt-get update && apt-get install -y ${buildRequirements} \
	&& docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/lib \
	&& docker-php-ext-install gd \
	&& apt-get purge -y ${buildRequirements} \
	&& rm -rf /var/lib/apt/lists/*

# mysql
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysql

# mbstring
RUN docker-php-ext-install mbstring

# intl
RUN buildRequirements="libicu-dev g++" \
	&& apt-get update && apt-get install -y ${buildRequirements} \
	&& docker-php-ext-install intl \
	&& apt-get purge -y ${buildRequirements} \
	&& runtimeRequirements="libicu52" \
	&& apt-get install -y --auto-remove ${runtimeRequirements} \
	&& rm -rf /var/lib/apt/lists/*

# imagick
RUN runtimeRequirements="libmagickwand-6.q16-dev --no-install-recommends" \
	&& apt-get update && apt-get install -y ${runtimeRequirements} \
	&& ln -s /usr/lib/x86_64-linux-gnu/ImageMagick-6.8.9/bin-Q16/MagickWand-config /usr/bin/ \
	&& pecl install imagick \
	&& echo "extension=imagick.so" > /usr/local/etc/php/conf.d/ext-imagick.ini \
	&& rm -rf /var/lib/apt/lists/*

# redis
RUN wget -O /tmp/redis.tar.gz https://github.com/phpredis/phpredis/archive/2.2.7.tar.gz \
	&& mkdir -p /tmp/redis \
	&& tar xzf /tmp/redis.tar.gz -C /tmp/redis --strip-components=1 \
	&& cd /tmp/redis \
	&& phpize \
	&& ./configure \
	&& make \
	&& make install \
	&& echo "extension=redis.so" > /usr/local/etc/php/conf.d/ext-redis.ini \
	&& rm -rf /tmp/redis.tar.gz /tmp/redis