<?
	$connect = mysql_connect("localhost", "php", "pass");
	mysql_select_db("phptest", $connect);
	$content = addslashes($content);
	$query = "insert into gbook (gid, name, homepage, email, content, userpd, rdate)
				values('', '$name', '$homepage', '$email', '$content', '$userpd', now())";
	$result = mysql_query($query, $connect) or die("에러:".mysql_error());

	die("<meta http-equiv='refresh' content='0;url=gbook_list.php'>");
?>
