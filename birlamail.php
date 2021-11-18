<?php
//get data from form  
$name = $_POST['name'];
$phone= $_POST['phone'];
$email= $_POST['email'];
$to = "akshayraj4074@gmail.com";
$subject = "CUSTOMER ENQUIRY FOR BIRLA TISYA";
$txt ="Name = ". $name . "\r\n  phone = " . $phone . "\r\n email =" . $email;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: aksayraj4074@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
?>