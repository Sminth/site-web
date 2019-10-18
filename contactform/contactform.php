<?php

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";

$mail = new PHPMailer(TRUE);

try {
	$mail->SMTPDebug = 2;
	$mail->isSMTP();
	$mail->Host = 'smtp.googlemail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'emmanuelmalan225@gmail.com';
	$mail->Password = 'kassi225';
	$mail->SMTPSecure = 'ssl';
	$mail->Port = 465;
	$mail->setFrom('emmanuelmalan225@gmail.com', 'professionnel');
	$mail->addAddress('expertproffessionnel@gmail.com', 'expert');
	$mail->isHTML(true);
	$mail->Subject = 'pro television';
	$mail->Body='<html>';
	$mail->Body .='<body>';
	$mail->Body .='<p>'."Bonjour".'<br/>'."vous avez reçu un message de ".$_POST['name'].'<p>';
	$mail->Body .='<p>'."numero: ".$_POST['numero'].'<p>';
	$mail->Body .='<p>'.'<strong>'."contenu du message:".'<strong>'.'<p>';
	$mail->Body .='<p>'.$_POST['message'].'<p>';
	$mail->Body .='<body>';
	$mail->Body .='<html>';
	$mail->send();
	echo 'Votre message a bien été envoyé';

} catch (Exception $e) {
	echo 'Erreur de connection veillez ressayer. Mail Error: '. $mail->ErrorInfo;
}

?>
