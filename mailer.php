<?php
$to ='chykchicago@gmail.com';
$subject ="Chyk Camp Question"; 
$fname = $_POST['first_name'];
$mail_from= $_POST['email'];
$message = $_POST['comments'];
$trans = $_POST['transport'];
// Send Message
$send_contact=mail($to,$subject,"Name: $fname\nEmail: $mail_from\nMessage: $message\nTransportDetail: $trans\n","From: Forms <chykSite@mychinmaya.org>");


if($send_contact){
echo "Submitted. Thank you for contacting us. We will get back to you shortly.<br/>Go to <a href='http://mychinmaya.org/chyk/index.shtml'>Home Page</a>"; 
}
else {
echo "Error submitting message.</br> Please go to <a href='http://mychinmaya.org/chyk/contactus.shtml'>Contact Page</a>"; 
}
?>