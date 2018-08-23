#!/bin/bash

cur_dir=$(pwd)
download_dir=$(pwd)/src
if [ ! -d ${download_dir} ]; then
    mkdir ${download_dir}
fi

. include/main.sh
. include/init.sh
. include/nginx.sh
. include/php.sh
. include/mysql.sh


Install_Libiconv
Install_Libmcrypt
#Install_Libjpeg


read -p 'Please select the software you want to install. 1 nginx  2 php5.6  3 mysql  4 php7  5 php7_new 6 php5.6.5 7 php5.6.36 8 php7.0.30' selection

echo $selection
case ${selection} in 
    1)
        Install_Nginx
    ;;
    2)
        Install_PHP56
    ;;
    3)
        Install_MySQL
    ;;
    4)
        Install_PHP70
    ;;
    5)
        Install_PHP70_centos6
    ;;
    6)
        Install_PHP5_6_5
    ;;
    7)
        Install_PHP5_6_36
    ;;
    8)
        Install_PHP7_0_30
    ;;
    *)
        echo 'wrong num'
    ;;
esac

