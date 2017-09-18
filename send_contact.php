<?php

$subject ="$subject"; 
$message="$detail";
$mail_from="$customer_mail"; 
$header="from: $name <$mail_from>";
$to ='tigercollins29@gmail.com';
$send_contact=mail($to,$subject,$message,$header);
// Check, if message sent to your email 
// display message "We've recived your information"
if($send_contact){
echo "We've recived your contact information";
}
else {
echo "ERROR";
}
?>