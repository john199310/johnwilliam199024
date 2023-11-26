<?php
// Get form data
$subject = $_REQUEST['subject'];
$body = $_REQUEST['body'];

// Set recipient email address
$recipient = 'cryptosi@protonmail.com';

// Set email headers
$headers = "From: sender@example.com\r\n";
$headers .= "Reply-To: sender@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

// Send the email
$mailSent = mail($recipient, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo json_encode(array('result' => 'success'));
} else {
    echo json_encode(array('result' => 'fail'));
}
?>