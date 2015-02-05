<?php 

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

	$firstName = strip_tags( trim($_POST['firstName']) );
	$firstName = str_replace( array("\r","\n"), array(" "," "), $firstName );

	$lastName = strip_tags( trim($_POST['lastName']) );
	$lastName = str_replace( array("\r","\n"), array(" "," "), $lastName );

	$address = filter_var(trim($_POST['address']), FILTER_SANITIZE_EMAIL);
	$message = trim( $_POST['message'] );

	$confirmationMessage = "
	<html>
	<head>
		<title>Confirmation Message</title>
	</head>
	<body>
		<h3>Hey $firstName,</h3>
		<p>We\'ve received your message and will respond within 48 hours, although we usually reply much sooner than that. If for some reason you don\'t hear from us, send another email to bonjour@catnap.co and we\'ll get back to you as soon as possible.</p><br>

		<p>Thanks,</p>
		<p>Kyle & Liam</p>
		<p>Team Catnap</p>
		<p>catnap.co</p><br>

		<blockquote>".$message."</blockquote>
	</body>
	</html>
	";

	// Check that all data was sent
	if ( empty($firstName) OR empty($message) OR !filter_var($address, FILTER_VALIDATE_EMAIL) ) {
		echo "user error";
		exit;
	}

	// Send emails
	$email = mail( 'bonjour@catnap.co', "A message from $firstName $lastName", $message, "From: $address");
	$confirmation = mail( $address, 'We got your note',  $confirmationMessage, 'From: bonjour@catnap.co\r\nContent-type: text/html; charset=iso-8859-1'."\r\n" );

	if ( $email && $confirmation ) {
		echo "success";
	} else {
		echo "fail";
	}

}