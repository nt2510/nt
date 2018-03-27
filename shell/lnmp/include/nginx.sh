#~/bin/bash

Install_Nginx()
{
    cd ${cur_dir}/src
    rm -fr nginx-1.10.1
    Download_File http://nginx.org/download/nginx-1.10.1.tar.gz nginx-1.10.1.tar.gz 

    nginx_target_file='/usr/local/nginx'

    rm -fr ${nginx_target_file}

    tar zxvf nginx-1.10.1.tar.gz
    cd nginx-1.10.1

    ./configure --with-http_ssl_module --with-http_stub_status_module

    make
    make install

    groupadd -f www
    useradd -g www www

    ${nginx_target_file}/sbin/nginx
}
