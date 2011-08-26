<?php

$okToSend = false;

$mailName = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$message = $_REQUEST['message'];

// clean up strings
$mailName = ereg_replace("[^A-Za-z0-9 ]", "", $mailName);
$email = ereg_replace("[^A-Za-z0-9@\.]", "", $email);
$phone = ereg_replace("[^0-9]", "", $phone);
//$message = ereg_replace("[^A-Za-z0-9]", "", $message);

// server side errors
if ($mailName!='' && $email!='' && $message!='') {

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
	$headers .= "From: $email" . "\r\n";

	$emailbody = '<table><tr><td>Name: </td><td>'.$mailName.'</td></tr><tr><td>Email: </td><td>'.$email.'</td></tr><tr><td>Phone: </td><td>'.$phone.'</td></tr><tr><td>Message: </td><td>'.$message.'</td></tr></table>';


	mail( "frank@everybodylovesfrank.com", "ELF contact form",$emailbody, $headers );
	header( "Location: http://www.everybodylovesfrank.com?contact=".$mailName );

}
else {
	header( "Location: http://www.everybodylovesfrank.com?formErrors=true" );
}
?>