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


read -p 'Please select the software you want to install. 1 nginx 2 php5.6 3 mysql 4 php7' selection

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
    *)
        echo 'wrong num'
    ;;
esac

