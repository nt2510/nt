#!/bin/bash

Install_Libmcrypt()
{
    cd ${cur_dir}/src
    rm -fr libmcrypt-2.5.8
    Download_File https://sourceforge.net/projects/mcrypt/files/Libmcrypt/2.5.8/libmcrypt-2.5.8.tar.gz/download libmcrypt-2.5.8.tar.gz
    tar -zxvf libmcrypt-2.5.8.tar.gz
    cd libmcrypt-2.5.8
    ./configure --prefix=/usr/local/libmcrypt
    make && make install

    echo "/usr/local/libmcrypt/lib" > /etc/ld.so.conf.d/libmcrypt.conf
    ldconfig
}


Install_Libiconv()
{
    cd ${cur_dir}/src
    echo $(pwd)
    rm -fr libiconv-1.14
    Download_File http://ftp.gnu.org/pub/gnu/libiconv/libiconv-1.14.tar.gz libiconv-1.14.tar.gz
    tar zxvf libiconv-1.14.tar.gz
    cd libiconv-1.14
    ./configure --prefix=/usr/local/libiconv
    make
    sed -i 's/^_GL_WARN_ON_USE (gets, "gets is a security hole - use fgets instead");/\/\/_GL_WARN_ON_USE (gets, "gets is a security hole - use fgets instead");/' srclib/stdio.h
    make
    make install
}

Install_Libjpeg()
{
    cd ${cur_dir}/src
    echo $(pwd)
    rm -fr jpeg-9c
    Download_File http://www.ijg.org/files/jpegsrc.v9c.tar.gz jpegsrc.v9c.tar.gz
    tar zxvf jpegsrc.v9c.tar.gz
    cd jpeg-9c
    ./configure --prefix=/usr/local/jpeg --enable-shared --enable-static
    make   
    make install
}
