<?php 
$em='rishabhchauhan9760@gmail.com';
$to=$em;
                        $subject = 'My subject';
$txt ='$password';
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";
mail($to,$subject,$txt,$headers);
echo "mail sent!!!!";
?>