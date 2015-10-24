<?php
	$host='localhost';
	$username='root';
	$password='';

	$db='ilma';

	if(!mysql_connect($host,$username,$password) || !mysql_select_db($db)) {
		die(mysql_error());
	}
?>