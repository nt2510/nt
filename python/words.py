#!/usr/bin/env pytho3
import pymysql
import jieba
import jieba.analyse
import collections
conn = pymysql.connect(host='127.0.0.1', port=3306, user='root', password='', db='bbs', charset='utf8')
#print(conn)

#cursor = conn.cursor()
cursor = conn.cursor(cursor=pymysql.cursors.DictCursor)
#print(cursor)

####select####
cursor.execute('select * from comment')
#wf = open('clean_title.txt','w+')
row3 = cursor.fetchall()
#print(row3);
tag_dict =[] 
for i in row3:
	content = i['content']
	tags = jieba.analyse.extract_tags(content)	
	print(tags)
	tag_dict.extend(tags)
	text = ','.join(tags)
	#wf.write(text)

#wf.close()
print(tag_dict)
res = collections.Counter(tag_dict)
result = res.most_common(10)
print(result)
conn.commit()
cursor.close()
conn.close()
