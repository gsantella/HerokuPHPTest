<?php
// Recipient
$to = 'dkeller16x@yahoo.com';
// Subject
$subject = 'This is our test email';
// Message
$message = '<h1>Hi there.</h1><p>Thanks for testing!</p>';
// Headers
$headers = "From: The Sender Name <SENDER EMAIL ADDRESS>\r\n";
$headers .= "Reply-To: REPLY-TO EMAIL ADDRESS\r\n";
$headers .= "Content-type: text/html\r\n";
// Send email
if(mail($email_to, $email_subject, $email_body)){
        echo "The email($email_subject) was successfully sent.";
    } else {
        echo "The email($email_subject) was NOT sent.";
    }