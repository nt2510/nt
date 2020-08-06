#!/bin/bash
DATE=`date +"%F %T"`
BASEPATH=/var/scripts/db_clone
LOCALPATH=$BASEPATH/sql
LOGFILE=$BASEPATH/sftp.log
SFTPHOST=127.0.0.1
SFTPUSER=ftp
SFTPPASSWORD=pwd
SFTPPATH=/OUT/restore_db

echo "$DATE" >>$LOGFILE
echo "Starting login MFT sftp server to $SFTPUSER@$SFTPHOST" >>$LOGFILE
cd $LOCALPATH

expect <<EOF >>$LOGFILE 2>&1
spawn sftp $SFTPUSER@$SFTPHOST
expect {
    "(yes/no)?" {send "yes\r";exp_continue}
}
expect "Password:"
send "${SFTPPASSWORD}\r"
expect "sftp>"
send "cd ${SFTPPATH}\n"
expect "sftp>"
send "get db-20*.gz \n"
expect "sftp>"
send "exit\n"
set timeout 300
expect eof
EOF


function get_latest_sql(){
    echo $(ls -rl /var/scripts/db_restore/sql | grep sql$ | head -n 1 | awk '{print $9}')
}

cd $LOCALPATH
rm *.sql
for file in *.gz
  do
    echo "start gunzip file $file"
    gunzip $file
  done

get_latest_sql

mysql -uroot -p'tc@test#19' -e 'drop database db_slave'
mysql -uroot -p'tc@test#19' -e 'create database db_slave'
mysql -uroot -p'tc@test#19' db_slave < $(get_latest_sql)
