<?php
session_cache_limiter( 'nocache' );
$subject = $_REQUEST['You have received a mail']; // Subject of your email
$to = "care@choplessglobalplaza.com.ng";  //Recipient's E-mail
$from = "['email']"; //Recipient's E-mail

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['name'].'<'.$_REQUEST['email'] .'>'. "\r\n"; 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message  = 'Name: ' . $_REQUEST['name'] . "<br>";
$message .= $_REQUEST['message'];

if (@mail($to, $subject, $message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
	//header('Location: ./contact.html');
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>