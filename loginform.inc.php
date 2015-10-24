<?php
	if(isset($_POST['submit'])){
		if (isset($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['username'])&&!empty($_POST['password'])) {
			$username=$_POST['username'];
			$password=$_POST['password'];
			$query="select `id` from `customer_info` where `user_id`='$username' and `password`='$password'";
			$query_run=mysql_query($query);
			if ($query_run) {
				$num_rows=mysql_num_rows($query_run);
				if ($num_rows==0) 
					echo "Invalid Combination !";
				else if ($num_rows==1) {
					$id=mysql_result($query_run,0,'id');
					$_SESSION['id']=$id;
					header('Location:index.php');
				}else{
					echo "server side busy... so. ..|.. ..|..";
				}
			}else{
				echo "Something went wrong dude !";
			}
		}else {
			echo "Please Enter Dude !";
		}
	}
?>
<fieldset>
	<legend>ILMA Service Login</legend>
	<form action="index.php" method="post">
		<label>Username : 
			<input type="text" placeholder="Enter Here..." name="username">
		</label><br>
		<label>Password : 
			<input type="password" placeholder="Enter Here..." name="password">
		</label><br>
		<input type="submit" name="submit" value="Log In">
		<input type="Reset">
	</form>
</fieldset>