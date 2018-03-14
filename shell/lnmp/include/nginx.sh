#~/bin/bash

Install_Nginx()
{

    cd ${cur_dir}/src
    rm -fr nginx-1.10.1
    Download_File http://nginx.org/download/nginx-1.10.1.tar.gz nginx-1.10.1.tar.gz 
    #wget -O libmcrypt-2.5.8.tar.gz  https://sourceforge.net/projects/mcrypt/files/Libmcrypt/2.5.8/libmcrypt-2.5.8.tar.gz/download

#nginx_source_file='/root/nginx-1.10.1'
nginx_target_file='/usr/local/nginx'

rm -fr ${nginx_target_file}

#rm -fr ${nginx_source_file}

tar zxvf nginx-1.10.1.tar.gz
cd nginx-1.10.1

./configure --with-http_ssl_module --with-http_stub_status_module


make


make install


#groupadd -f www
#useradd -g www www


${nginx_target_file}/sbin/nginx



#chkconfig add nginx
#chkconfig nginx on
}
