<?php
	$con = mysql_connect("localhost","root","root");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	mysql_select_db("test", $con);
	mysql_query("set name utf8");
	$time = time();
	$sql = mysql_query("INSERT INTO data (name,content,time) VALUES ('$_POST[name]', '$_POST[content]', '$time')");
	if($sql){
		echo "add one record";
	}
	else{
		echo 'failed'.mysql_error();
	}
?> 	