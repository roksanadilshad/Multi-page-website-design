<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$massage = $_POST['massage'];


$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';
$email_body = "User Name: $name.\n".
                 "User Email: $visitor_email.\n".
                 "Subject: $subject.\n".
                 "User massage: $massage.\n";


$to = 'lagonlegend847@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n"


mail($to,$email_subject,$email_body,$headers);

header(Location: contact.html);





?>