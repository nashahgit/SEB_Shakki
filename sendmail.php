<?php
require 'PHPMailer-master/PHPMailerAutoload.php';

$codescafeMail = new PHPMailer();
$codescafeMail->IsSMTP();
$codescafeMail->Mailer = 'smtp';
$codescafeMail->SMTPAuth = true;
$codescafeMail->Host = 'smtp.gmail.com'; 
$codescafeMail->Port = 587;
$codescafeMail->SMTPSecure = 'tls';
// or try these settings (worked on XAMPP and WAMP):
// $codescafeMail->Port = 587;
// $codescafeMail->SMTPSecure = 'tls';
$codescafeMail->Username = "nashah25@gmail.com";
$codescafeMail->Password = "passports4$";
$codescafeMail->IsHTML(true); // For HTML formatted mails
$codescafeMail->SingleTo = true; 
$codescafeMail->From = "johnnash@gmail.com";
$codescafeMail->FromName = "John Nash";
$codescafeMail->Subject = "CodesCafe mail test with Phpmailer";
$codescafeMail->Body = "Alhamdulillah its working fine";
$codescafeMail->AddAddress("nashah25@gmail.com", "Nasruddin shah");
 if(!$codescafeMail->Send()){
        echo "Something Wrong! Message was not send!! " . $codescafeMail->ErrorInfo;
}
else{
        echo "success";
}
?>