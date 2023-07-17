
<?php
$email = $_POST['email'];
 

$to = $email;
$subject = 'Reset Password';
$message = 'To reset the password click the link below.
http://localhost:8080/rummy/change.html';
$sender = 'from: venkataramanavallepu72@gmail.com';
if(mail($to,$subject,$message,$sender))
echo header('location:mailsent.html');
else
echo "invalid mail";
 



?>