<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['subject'])   ||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'a7truong@uwaterloo.ca'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nSubject: $subject\n\nMessage:\n$message";
//$headers = "From: andy.truong16@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
//$headers = "Reply-To: $email_address";	
$from = "From: $name<$email_address>\r\nReturn-path: $email_address";
mail("a7truong@uwaterloo.ca",$email_subject,$email_body,$from);
echo "Email Sent!";
return true;			
?>