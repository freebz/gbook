CREATE TABLE gbook_admin (
	aid int(10) NOT NULL auto_increment,
	bookid varchar(10),
	admin_id varchar(10),
	admin_pass varchar(10),
	PRIMARY KEY (aid)
);
