<?php
	$connect = mysql_connect("localhost", "root", "autocad");
	mysql_select_db("phptest", $connect);

	$query1 = "CREATE TABLE $code (
		gid int(10) unsigned DEFAULT '0' NOT NULL auto_increment,
		email varchar(35),
		homepage varchar(50),
		content text,
		rdate date,
		userpd varchar(10),
		name varchar(20),
		content2 text,
		PRIMARY KEY (gid)
	)";
	
	$query2 = "CREATE TABLE gbook_admin(
		aid int(10) NOT NULL auto_increment,
		bookid varchar(10),
		admin_id varchar(10),
		admin_pass varchar(10),
		PRIMARY KEY (aid)
	)";
	
	$result1 = mysql_query($query1, $connect) or die("Error : ".mysql_error());
	$tbl_name = mysql_list_tables("phptest");
	$tbl_cnt = mysql_num_rows($tbl_name);
	for($i=0;$i<$tbl_cnt;$++){
		if(mysql_tablename($tbl_cnt, $i)=="gbook_admin") {
			$flag = "ok";
		}
	}
	
	if($flag!="ok") {
		$result2 = mysql_query($query2, $connect) or die("Error : ".mysql_error());
	}

	$query3 = "insert into gbook_admin(aid, bookid, admin_id, admin_pass)
				values('', '$code', '$admin_id', '$admin_pass')";

	$result3 = mysql_query($query3, $connect) or die("Error : ".mysql_error());

	mysql_close($connect);

	echo("방명록 데이타 베이스 설정이 완료되었습니다.");
?>