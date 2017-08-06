#!/usr/bin/env python3
#coding utf-8

import itchat
itchat.login()

friends=itchat.get_friends(update=True)[0:]

print(friends)

male = female = other = 0
for i in friends[1:]:
	sex = i['Sex']
	if sex == 1:
		male+=1
	elif sex == 2:
		female+=1
	else:
		other+=1
total = len(friends[1:])
print("男性朋友：%.2f%%" % (float(male)/total*100) + "\n" + 
	"女性朋友：%.2f%%" % (float(female)/total*100) + "\n" + 
	"其他：%.2f%%" % (float(other)/total*100) + "\n"
	)



