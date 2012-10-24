CREATE TABLE gbook (
	gid int(10) unsigned NOT NULL auto_increment,
	email varchar(35),
	homepage varchar(50),
	content text,
	rdate date,
	userpd varchar(10),
	name varchar(20),
	content2 text,
	PRIMARY KEY (gid)
);
