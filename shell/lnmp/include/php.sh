#!/bin/bash

Install_PHP56()
{

    cd ${cur_dir}/src
    rm -fr php-5.6.34
    Download_File http://se1.php.net/get/php-5.6.34.tar.gz/from/this/mirror php-5.6.34.tar.gz 

rm -fr /usr/local/php5.6
echo '###start tar php###'
tar zxvf php-5.6.34.tar.gz
echo '###end tar php###'

cd php-5.6.34
echo '###start configure php###'

./configure \
--prefix=/usr/local/php5.6 \
--with-config-file-path=/usr/local/php5.6/etc \
--enable-inline-optimization \
--disable-debug \
--disable-rpath \
--enable-shared \
--enable-opcache \
--enable-fpm \
--enable-mysqlnd \
--with-mysql=mysqlnd \
--with-mysqli=mysqlnd \
--with-pdo-mysql=mysqlnd \
--with-gettext \
--enable-mbstring \
--with-iconv=/usr/local/libiconv \
--with-mcrypt=/usr/local/libmcrypt \
--with-mhash \
--with-openssl \
--enable-bcmath \
--enable-soap \
--with-libxml-dir \
--enable-pcntl \
--enable-shmop \
--enable-sysvmsg \
--enable-sysvsem \
--enable-sysvshm \
--enable-sockets \
--with-curl \
--enable-zip \
--with-zlib \
--with-bz2 \
--with-gd \
--enable-exif \
--enable-intl \

echo '###end configure php###'

echo '###start make php###'
make
echo '###end make php###'

if [ $? -eq 0 ]
then
echo '===start make install==='
make install
echo '===end make install==='
fi



cp php.ini-production /usr/local/php5.6/etc/php.ini
cp /usr/local/php5.6/etc/php-fpm.conf.default /usr/local/php5.6/etc/php-fpm.conf
cp sapi/fpm/init.d.php-fpm /etc/init.d/php-fpm
chmod a+x /etc/init.d/php-fpm
service php-fpm start

echo '===end install==='



#chkconfig add php-fpm
#chkconfig php-fpm on

}


Install_PHP70()
{

    cd ${cur_dir}/src
    rm -fr php-7.0.28
    Download_File http://cn2.php.net/get/php-7.0.28.tar.gz/from/this/mirror php-7.0.28.tar.gz 

rm -fr /usr/local/php7
echo '###start tar php###'
tar zxvf php-7.0.28.tar.gz
echo '###end tar php###'

cd php-7.0.28
echo '###start configure php###'

./configure \
--prefix=/usr/local/php7 \
--with-config-file-path=/usr/local/php7/etc \
--enable-inline-optimization \
--disable-debug \
--disable-rpath \
--enable-shared \
--enable-opcache \
--enable-fpm \
--enable-mysqlnd \
--with-mysql=mysqlnd \
--with-mysqli=mysqlnd \
--with-pdo-mysql=mysqlnd \
--with-gettext \
--enable-mbstring \
--with-iconv=/usr/local/libiconv \
--with-mcrypt=/usr/local/libmcrypt \
--with-mhash \
--with-openssl \
--enable-bcmath \
--enable-soap \
--with-libxml-dir \
--enable-pcntl \
--enable-shmop \
--enable-sysvmsg \
--enable-sysvsem \
--enable-sysvshm \
--enable-sockets \
--with-curl \
--enable-zip \
--with-zlib \
--with-bz2 \
--with-gd \
--enable-exif \
--enable-intl \

echo '###end configure php###'

echo '###start make php###'
make
echo '###end make php###'

if [ $? -eq 0 ]
then
echo '===start make install==='
make install
echo '===end make install==='
fi




cp php.ini-production /usr/local/php7/etc/php.ini
cp /usr/local/php7/etc/php-fpm.conf.default /usr/local/php7/etc/php-fpm.conf
cp /usr/local/php7/etc/php-fpm.d/www.conf.default /usr/local/php7/etc/php-fpm.d/www.conf
cp sapi/fpm/init.d.php-fpm /etc/init.d/php-fpm7
chmod a+x /etc/init.d/php-fpm7
service php-fpm7 start

echo '===end install==='



#chkconfig add php-fpm
#chkconfig php-fpm on

}
