<?php
	include 'connect.inc.php';
	include 'core.inc.php';
	if(loggedin()){
		header("Location:account.php");
	}else{
		include 'loginform.inc.php';
	}	
?>