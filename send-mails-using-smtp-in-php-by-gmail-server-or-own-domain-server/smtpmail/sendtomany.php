<?php
include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name
$mail	= new PHPMailer; // call the class 
$mail->IsSMTP(); 
$mail->Host = SMTP_HOST; //Hostname of the mail server
$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
$mail->SMTPAuth = true; //Whether to use SMTP authentication
$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
$mail->Password = SMTP_PWORD;
$mail->AddReplyTo("reply@yourdomain.com", "Reply name"); //reply-to address
$mail->SetFrom("from@yourdomain.com", "Asif18 SMTP Mailer"); //From address of the mail
// put your while loop here like below,
$mail->Subject = "Your SMTP Mail"; //Subject od your mail
$recipients = array(
   'subscriber1@asif18.com' => 'Asif 18',
   'subscriber2@gmail.com' => 'Mohamed Asif'
);
foreach($recipients as $email => $name){
	// it will display the emails of all users in their Mailbox 'To' area. Simple multiple mail.
	$mail->AddAddress($email, $name); //To address who will receive this email
	$mail->MsgHTML("<b>Hi, your first Newsletter mail through SMTP has been received. Great Job!.. <br/><br/>by <a href='http://www.asif18.com/7/php/send-mails-using-smtp-in-php-by-gmail-server-or-own-domain-server/'>Asif18</a></b>"); //Put your body of the message you can place html code here
	$mail->AddAttachment("images/asif18-logo.png"); //Attach a file here if any or comment this line (usimg absolute path), 
	$send = $mail->Send(); //Send the mails
	// if you want to does not show other users email addresses like newsletter, daily, weekly, subscription emails means use the below line to clear previous email address
	$mail->ClearAddresses();
}
	if($send){
		echo '<center><h3 style="color:#009933;">Mail sent successfully</h3></center>';
	}
	else{
		echo '<center><h3 style="color:#FF3300;">Mail error: </h3></center>'.$mail->ErrorInfo;
	}
?>