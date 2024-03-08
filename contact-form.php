<?php
// Get data from form  
$name = $_POST['contact-name'];
$email= $_POST['contact-email'];
$subject = $_POST['contact-subject'];
$message= $_POST['contact-message'];
 
$to = "rickyrockter@gmail.com";
$subject = $_POST['contact-subject'];
 
// The following text will be sent
// Name = user entered name
// Email = user entered email
// Message = user entered message 
$txt ="Name = ". $name . "\r\n  Email = "
    . $email . "\r\n Message =" . $message;

if($email != NULL) {
    mail($to, $subject, $txt);
}

// Redirect to
header("Location:sent.html");

?>