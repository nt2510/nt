
create database bbs;

create table user(
	user_id int(10) not null auto_increment,
	username varchar(50) not null default '',
	password varchar(100) not null default '',
	posttime datetime not null default '0000-00-00 00:00:00',
	primary key(user_id)
)engine = 'InnoDB' default charset = 'utf8' comment = '會員';
alter table user add is_black tinyint(1) not null default 0 after password;

create table admin(
	id int(10) not null auto_increment,
	username varchar(50) not null default '',
	password varchar(100) not null default '',
	posttime datetime not null default '0000-00-00 00:00:00',
	primary key(id)
)engine = 'InnoDB' default charset = 'utf8' comment = '會員';


create table comment(
	id int(10) not null auto_increment,
	user_id int(10) not null default 0,
	content varchar(200) not null default '',
	posttime datetime not null default '0000-00-00 00:00:00',
	primary key(id),
	index idx_user_id(user_id)
)engine = 'InnoDB' default charset = 'utf8' comment = '會員';