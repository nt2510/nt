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
--with-iconv \
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
--enable-opcache=no \
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
--with-bz2 \
--with-gd \
--with-jpeg-dir=/usr/local/jpeg \
--enable-exif \
--enable-intl \
--with-xsl \

#--enable-zip \
#--with-zlib \
#--with-libzip=/usr/local/libzip \
#--with-zlib=/usr/local/zlib \

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
cp sapi/fpm/init.d.php-fpm /etc/init.d/php-fpm7
chmod a+x /etc/init.d/php-fpm7
service php-fpm7 start

echo '===end install==='



#chkconfig add php-fpm
#chkconfig php-fpm on

}


Install_PHP5_6_36()
{

    cd ${cur_dir}/src
    rm -fr php-5.6.36
    Download_File http://hk1.php.net/get/php-5.6.36.tar.gz/from/this/mirror php-5.6.36.tar.gz 
    
install_dir=/usr/local/php5.6.36    

rm -fr ${install_dir}
echo '###start tar php###'
tar zxvf php-5.6.36.tar.gz

#tar zxvf nginx-1.10.1.tar.gz -C nginx --strip-components 1
echo '###end tar php###'

cd php-5.6.36
echo '###start configure php###'

./configure \
--prefix=${install_dir} \
--with-config-file-path=${install_dir}/etc \
--enable-inline-optimization \
--disable-debug \
--disable-rpath \
--enable-shared \
--enable-opcache=no \
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
--with-zlib \
--with-bz2 \
--with-gd \
--with-jpeg-dir \
--with-png-dir \
--enable-exif \
--enable-calendar \
--with-xsl \
--enable-wddx \

#--enable-zip \

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



cp php.ini-production ${install_dir}/etc/php.ini
cp ${install_dir}/etc/php-fpm.conf.default ${install_dir}/etc/php-fpm.conf
#cp sapi/fpm/init.d.php-fpm /etc/init.d/php-fpm
#chmod a+x /etc/init.d/php-fpm
#service php-fpm start

echo '===end install==='



#chkconfig add php-fpm
#chkconfig php-fpm on

}


Install_PHP7_0_30()
{

    cd ${cur_dir}/src
    rm -fr php-7.0.30
    Download_File http://au1.php.net/get/php-7.0.30.tar.gz/from/this/mirror php-7.0.30.tar.gz 

    install_dir=/usr/local/php7.0.30  
    
rm -fr ${install_dir}
echo '###start tar php###'
tar zxvf php-7.0.30.tar.gz
echo '###end tar php###'

cd php-7.0.30
echo '###start configure php###'

./configure \
--prefix=${install_dir} \
--with-config-file-path=${install_dir}/etc \
--enable-inline-optimization \
--disable-debug \
--disable-rpath \
--enable-shared \
--enable-opcache=no \
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
--with-zlib \
--with-bz2 \
--with-gd \
--with-jpeg-dir \
--with-png-dir \
--enable-exif \
--enable-intl \
--enable-calendar \
--with-xsl \
--enable-wddx \

#--enable-zip \
#--with-libzip=/usr/local/libzip \

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




cp php.ini-production ${install_dir}/etc/php.ini
cp ${install_dir}/etc/php-fpm.conf.default ${install_dir}/etc/php-fpm.conf
#cp sapi/fpm/init.d.php-fpm /etc/init.d/php-fpm7
#chmod a+x /etc/init.d/php-fpm7
#service php-fpm7 start

echo '===end install==='



#chkconfig add php-fpm
#chkconfig php-fpm on

}


Install_PHP70_centos6()
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
--enable-fpm \
--enable-mysqlnd \
--with-mysql=mysqlnd \
--with-mysqli=mysqlnd \
--with-pdo-mysql=mysqlnd \
--with-mcrypt=/usr/local/libmcrypt \
--with-mhash \
--with-openssl \
--with-curl \
--with-iconv=/usr/local/libiconv \
--with-gettext \
--with-bz2 \
--enable-exif \
--enable-bcmath \
--with-libxml-dir \
--with-gd \
--enable-soap \
--enable-sockets \
--with-xsl \
--enable-mbstring \
--enable-calendar \
--enable-pcntl \
--enable-shmop \
--enable-intl \
--with-icu-dir=/usr/local/icu \
--enable-opcache=no \
--enable-zip \
--with-libzip=/usr/local/libzip \
--with-zlib=/usr/local/zlib \
--disable-fileinfo \

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
cp sapi/fpm/init.d.php-fpm /etc/init.d/php-fpm7
chmod a+x /etc/init.d/php-fpm7
service php-fpm7 start

echo '===end install==='



#chkconfig add php-fpm
#chkconfig php-fpm on

}





Install_PHP5_6_5()
{

    cd ${cur_dir}/src
    rm -fr php-5.6.5
    Download_File http://be2.php.net/get/php-5.6.5.tar.gz/from/this/mirror php-5.6.5.tar.gz 
    
    

rm -fr /usr/local/php5.6.5
echo '###start tar php###'
tar zxvf php-5.6.5.tar.gz
echo '###end tar php###'

cd php-5.6.5
echo '###start configure php###'

./configure \
--prefix=/usr/local/php5.6.5 \
--with-config-file-path=/usr/local/php5.6.5/etc \
--enable-inline-optimization \
--disable-debug \
--disable-rpath \
--enable-shared \
--enable-opcache=no \
--enable-fpm \
--enable-mysqlnd \
--with-mysqli=mysqlnd \
--with-pdo-mysql=mysqlnd \
--with-mcrypt=/usr/local/libmcrypt \
--with-mhash \
--with-openssl \
--with-curl \
--with-iconv=/usr/local/libiconv \
--with-gettext \
--enable-zip \
--with-zlib \
--with-bz2 \
--enable-exif \
--enable-bcmath \
--with-libxml-dir \
--with-gd \
--enable-soap \
--enable-sockets \
--with-xsl \
--enable-mbstring \
--enable-calendar \
--enable-pcntl \
--enable-shmop \
--enable-intl \
--with-icu-dir=/usr/local/icu \




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



cp php.ini-production /usr/local/php5.6.5/etc/php.ini
cp /usr/local/php5.6.5/etc/php-fpm.conf.default /usr/local/php5.6.5/etc/php-fpm.conf
#cp sapi/fpm/init.d.php-fpm /etc/init.d/php-fpm
#chmod a+x /etc/init.d/php-fpm
#service php-fpm start

echo '===end install==='



#chkconfig add php-fpm
#chkconfig php-fpm on

}
