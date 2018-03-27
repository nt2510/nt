#~/bin/bash

Install_MySQL()
{
    cd ${cur_dir}/src
    rm -fr mysql-5.7.19
    Download_File https://dev.mysql.com/get/Downloads/MySQL-5.7/mysql-boost-5.7.19.tar.gz mysql-bottst-5.7.19.tar.gz 
mysql_tar_file='mysql-bottst-5.7.19.tar.gz'
mysql_install_dir='/usr/local/mysql5.7'
mysql_data_dir='/usr/local/mysql5.7/var'
mysql_conf_file='/etc/my57.cnf'

tar zxvf ${mysql_tar_file}
cd mysql-5.7.19

rm -fr ${mysql_install_dir} 

mkdir -p ${mysql_install_dir}/var
mkdir -p ${mysql_install_dir}/etc

cmake . \
-DCMAKE_INSTALL_PREFIX=${mysql_install_dir} \
-DMYSQL_DATADIR=${mysql_data_dir} \
-DWITH_BOOST=boost
-DSYSCONFDIR=/etc \
-DDEFAULT_CHARSET=utf8mb4 \
-DDEFAULT_COLLATION=utf8mb4_general_ci \
-DENABLED_LOCAL_INFILE=1 \
-DEXTRA_CHARSETS=all


make
make install


cd ${mysql_install_dir} 

#cp support-files/mysql.server /etc/init.d/mysqld57
#chmod a+x /etc/init.d/mysqld57
#service mysqld57 start

${mysql_install_dir}/bin/mysqld --defaults-file=${msql_conf_file} --initialize-insecure --user=mysql --basedir=${mysql_install_dir} --datadir=${mysql_data_dir}

${mysql_install_dir}/bin/mysqld_safe --defaults-file=${mysql_conf_file} --user=mysql --datadir=${mysql_data_dir} &





#chkconfig add mysql
#chkconfig mysql on

}
