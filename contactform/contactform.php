<?php
$to      = 'expertproffessionnel@gmail.com';
$subject = 'le sujet';
$message = 'hello';
$headers = array(
    'From' => 'emmanuelmalan225@gmail.com',
    'Reply-To' => 'emmanuelmalan225@gmail.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
?>
