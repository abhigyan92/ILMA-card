<html> 
<body> 
<?php 
//create a variable we can use to determine if the user input is good or not 
$formOk=true; 
//Check that a first name has been entered 
if (empty($_POST['First_name'])) { 
    echo 'First name is required'; 
    $formOK = false; 
} 
//Check that a last name has been entered 
if (empty($_POST['Last_name'])) { 
    echo 'Last name is required'; 
    $formOK = false; 
} 
//Check that an email was entered 
if (empty($_POST['Email'])) { 
    echo 'Email is required'; 
    $formOK = false; 
} 
//Check that a password value has been entered  
if (empty($_POST['Password'])) { 
    echo 'Password is required'; 
    $formOK = false; 
} 
//Check for password value and if it matches the retyped password 
if ($_POST['Password'] != $_POST['confirm_password']) { 
    echo 'Passwords do not match'; 
    $formOK = false; 
} 
//Check that a city has been entered 
if (empty($_POST['City'])) { 
    echo 'City is required'; 
    $formOK = false; 
} 
//If all the information entered is valid, save the user to the database  
if ($formOK == true) { 
    $conn = mysqli_connect('localhost', 'dbxxxxx', 'XXXXXX', 'dbxxxxx') or die('Could not connect: ' . mysql_error()); 
     
    //Hash the password before saving it to make the value obscure 
    $passwordHash = sha1($_POST['Password']); 
    $sql = "INSERT INTO users (First_name,Last_name,Email, Password,City,Province) VALUES ('$_POST[First_name]','$_POST[Last_name]','$_POST[Email]','$passwordHash','$_POST[City]','$_POST[Province]')"; 
//Once the user has been added to the database, send a confirmation email to notify them 
//Create the variables to be used in the mail 
    $to=$_POST['Email']; 
    $subject="Email Confirmation"; 
    $message="This is a confirmation email"; 
//Use the mail function to send the confirmation email 
    mail($to,$subject,$message); 
//Show the user that they have been added and close the connection to the database. 
    mysqli_query($conn, $sql); 
    echo "User has been added"; 
    mysqli_close($conn); 
} 
else { 
    echo 'Click <a href="javascript:history.go(-1)">HERE</a> to go back and adjust your entry.'; 
} 
?> 

</body> 
</html>