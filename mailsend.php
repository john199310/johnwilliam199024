<?php
// Get form data
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

// Set recipient email address
$recipient = 'johnwilliam199024@gmail.com';

console.log($name, $email, $subject, $message);

$body = "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>$subject</title>
    <style>

    </style>

</head>
<body>
    <p>Hello John,</p>
    <p>I am intereseted in your portfolio, hope to collaborate with you</p>
    <p><strong>Subject:</strong> $subject</p>
    <p><strong>Message:</strong> $message</p>
    <p>We will get back to you as soon as possible.</p>
    <p>Best regards,<br>$name</p>
</body>
</html>
";

// Set email headers
$headers = "From: ".$email."\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1";

// Send the email
$mailSent = mail($recipient, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo json_encode(array('result' => 'success'));
} else {
    echo json_encode(array('result' => 'fail'));
}
?>