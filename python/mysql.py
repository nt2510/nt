#!/usr/bin/env pytho3
import pymysql

conn = pymysql.connect(host='127.0.0.1', port=3306, user='root', password='', db='bbs', charset='utf8')
print(conn)

#cursor = conn.cursor()
cursor = conn.cursor(cursor=pymysql.cursors.DictCursor)
print(cursor)

####select####
cursor.execute('select * from comment')

row1 = cursor.fetchone()
print(row1)

#row2 = cursor.fetchmany(2)
#print(row2);

row3 = cursor.fetchall()
print(row3);


####insert####
sql = "insert into comment(user_id, content, posttime) values(3,'今天听到一个讲座，关于瑞士酒店管理','2017-08-28 00:00:00')";

cursor.execute(sql)
insert_id = cursor.lastrowid
print(insert_id)



####update####
sql = "update comment set user_id = 66 where id = 5";
cursor.execute(sql)
rowcount = cursor.rowcount
print(rowcount)





conn.commit()
cursor.close()
conn.close()
