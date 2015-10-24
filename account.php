<?php
	include 'connect.inc.php';
	include 'core.inc.php';
	include "classes/class.phpmailer.php";
	//send_mail();
	echo "<h3>"."welcome ".get_field('cust_name').</h3>.' !<br>';
	echo "your Account Number : ".get_field('bank_acc_no').'<br>';
	echo "
	your Available Bal.ance : ".get_field('balance').'<br>
	
	<a href="logout.php">[LOG OUT]</a>';
	function send_mail(){
		$mail = new PHPMailer();
		$mail->IsSMTP();                                      // set mailer to use SMTP
		$mail->SMTPAuth = true;     // turn on SMTP authentication
		$mail->SMTPSecure = "tls";
		$mail->Host = "smtp.gmail.com";  // specify main and backup server
		$mail->Port = 587;
		$mail->Username = "rockker.fu@gmail.com";  // SMTP username
		$mail->Password = "magic366"; // SMTP password

		$mail->From = "rockker.fu@gmail.com";
		$mail->FromName = "ILMA Service";
		$mail->AddAddress("rockker.fu@gmail.com", "Kundan");

		$mail->WordWrap = 50;                                 // set word wrap to 50 characters
		$mail->IsHTML(true);                                  // set email format to HTML

		$mail->Subject = "ILMA Service";
		$mail->Body    = "This is ti inform you just accessed your account... If not, kindly check immediately";
		$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

		if(!$mail->Send())
		{
		   echo "Message could not be sent. <p>";
		   echo "Mailer Error: " . $mail->ErrorInfo;
		   exit;
		}

		echo "Message has been sent";
	}
?>
<input type = "button" value = "Past Transactions" onclick = "window.location.assign('transaction.php')"/>
<input type = "button" value = "Generate ILMA" onclick = "window.location.assign('generate.php')"/>