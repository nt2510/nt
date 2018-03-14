#~/bin/bash

Install_MySQL()
{
    cd ${cur_dir}/src
    rm -fr mysql-5.7.19
    Download_File https://dev.mysql.com/get/Downloads/MySQL-5.7/mysql-boost-5.7.19.tar.gz mysql-bottst-5.7.19.tar.gz 
    #wget -O libmcrypt-2.5.8.tar.gz  https://sourceforge.net/projects/mcrypt/files/Libmcrypt/2.5.8/libmcrypt-2.5.8.tar.gz/download
mysql_tar_file='mysql-bottst-5.7.19.tar.gz'

#rm -fr ${mysql_tar_file}
#if [ ! -f ${mysql_tar_file} ]
#then
#wget -O ${mysql_tar_file} https://dev.mysql.com/get/Downloads/MySQL-5.7/mysql-boost-5.7.19.tar.gz
#fi
tar zxvf ${mysql_tar_file}
cd mysql-5.7.19

rm -fr /usr/local/mysql5.7


mkdir -p /usr/local/mysql5.7/var
mkdir -p /usr/local/mysql5.7/etc

cmake . \
-DCMAKE_INSTALL_PREFIX=/usr/local/mysql5.7 \
-DMYSQL_DATADIR=/usr/local/mysql5.7/var \
-DWITH_BOOST=boost
-DSYSCONFDIR=/etc \
-DDEFAULT_CHARSET=utf8mb4 \
-DDEFAULT_COLLATION=utf8mb4_general_ci \
-DENABLED_LOCAL_INFILE=1 \
-DEXTRA_CHARSETS=all


make
make install


cd /usr/local/mysql5.7

cp support-files/mysql.server /etc/init.d/mysqld
chmod a+x /etc/init.d/mysqld
service mysqld start


#/usr/local/mysql5.7/bin/mysqld --defaults-file=/etc/my.cnf --initialize-insecure --user=mysql --basedir=/usr/local/mysql5.7 --datadir=/usr/local/mysql5.7/var

#/usr/local/mysql5.7/bin/mysqld_safe --defaults-file=/etc/my.cnf --user=mysql --datadir=/usr/local/mysql5.7/var &





#chkconfig add mysql
#chkconfig mysql on

}
