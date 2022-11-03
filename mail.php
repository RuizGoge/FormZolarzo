<?php
//get data from form  
$fname = $_POST['fname']; // required
$lname = $_POST['lname']; // required
$email = $_POST['email']; // required
$phone = $_POST['phone']; // required
$address = $_POST['address']; // required
$code = $_POST['code']; // required

$message= $_POST['message'];
//$to = "papaisushovan@gmail.com";
$to = $email;
$subject = "Mail From Zolarzo Registration";

$txt ="First Name = ". $fname . "\r\n Last Name = ". $lname . "\r\n  Email = " . $email . "\r\n Phone = ". $phone . "\r\n Address = ". $address . "\r\n  Address =" . $code;
$headers = "From: noreply@zolarzo.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thanks.html");
?>