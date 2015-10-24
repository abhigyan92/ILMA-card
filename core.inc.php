<?php
	ob_start();
	if (session_start()) {
		$current_file=$_SERVER['SCRIPT_NAME'];
	}
	function loggedin()
	{
		if (isset($_SESSION['id']) && !empty($_SESSION['id'])) 
			return true;
		else
			return false;
	}
	function get_field($field) {
		$query="select * from `customer_info` where `id`='".$_SESSION['id']."'";
		$query_run=mysql_query($query);
		if ($query_run) {
			$result=mysql_result($query_run,0,$field);
		}
		return $result;
	}
?>