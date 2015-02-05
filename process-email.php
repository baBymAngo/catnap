<?php 

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

	$firstName = strip_tags( trim($_POST['firstName']) );
	$firstName = str_replace( array("\r","\n"), array(" "," "), $firstName );

	$lastName = strip_tags( trim($_POST['lastName']) );
	$lastName = str_replace( array("\r","\n"), array(" "," "), $lastName );

	$address = filter_var(trim($_POST['address']), FILTER_SANITIZE_EMAIL);
	$message = trim($_POST['message']);
	$messageBrs = nl2br($message);

	$confirmationMessage = "
	<html>
	<head>
		<title>Confirmation Message</title>
	</head>
	<body>
		<div style='padding-bottom: 6px;'>
			<p>Hey $firstName,</p>
			<p>We've received your message and will respond within 48 hours, although we usually reply much sooner than that. If for some reason you don't hear from us, send another email to bonjour@catnap.co and we'll get back to you as soon as possible.</p>
			<p>Thanks,</p>
			<p><b>Kyle & Liam</b><br>
			Team Catnap<br>
			catnap.co</p>
		</div>
		
		<div style='border-top: 1px solid #dddddd; padding-top: 6px;'>
			<p style='color: #aaaaaa;'>$messageBrs</p>
		</div>
	</body>
	</html>
	";

	$confirmationHeader = 'MIME-Version: 1.0' . "\r\n";
	$confirmationHeader .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$confirmationHeader .= 'From: Catnap Creative <bonjour@catnap.co>' . "\r\n";

	// Check that all data was sent
	if ( empty($firstName) OR empty($message) OR !filter_var($address, FILTER_VALIDATE_EMAIL) ) {
		echo "user error";
		exit;
	}

	// Send emails
	$email = mail( 'Catnap Creative <bonjour@catnap.co>', "A message from $firstName $lastName", $message, "From: $address");
	$confirmation = mail( $address, 'We got your note',  $confirmationMessage, $confirmationHeader );

	if ( $email && $confirmation ) {
		echo "success";
	} else {
		echo "fail";
	}

}