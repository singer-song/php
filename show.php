<?php
	$con = mysql_connect("localhost","root","root");
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }
	mysql_query("set name utf8");
	mysql_select_db("test", $con);
	$result = mysql_query("SELECT * FROM data");
	while($row = mysql_fetch_array($result)){
		echo $row['name'].'<br/>';
		echo $row['content'].'<br/>';
		echo date('y-m-d',$row{'time'}).'<br/>';
	}
?>