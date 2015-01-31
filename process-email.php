<?php 

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {

	$firstName = strip_tags( trim($_POST['firstName']) );
	$firstName = str_replace( array("\r","\n"), array(" "," "), $firstName );

	$lastName = strip_tags( trim($_POST['lastName']) );
	$lastName = str_replace( array("\r","\n"), array(" "," "), $lastName );

	$address = filter_var(trim($_POST['address']), FILTER_SANITIZE_EMAIL);
	$message = trim( $_POST['message'] );

	// Check that all data was sent
	if ( empty($firstName) OR empty($message) OR !filter_var($address, FILTER_VALIDATE_EMAIL) ) {
		echo "user error";
		exit;
	}

	// Send emails
	$email = mail( 'bonjour@catnap.co', 'Message for Catnap', $message, "From: $address");
	$confirmation = mail( $address, 'Confirmation Message', "Thank you for your message, $firstName! We\'re so psyched to hear from you. We will respond just as soon as we can." , 'From: bonjour@catnap.co' );

	if ( $email && $confirmation ) {
		echo "success";
	} else {
		echo "fail";
	}


	/*$email1 = new Email(array(
	  'to'      => 'bonjour@catnap.co',
	  'from'    => $address,
	  'subject' => 'Messgage for Catnap',
	  'body'    => $message
	));

	$email2 = new Email(array(
	  'to'      => $address,
	  'from'    => 'bonjour@catnap.co',
	  'subject' => 'Confirmation Message',
	  'body'    => "Hello $firstName, We just wanted you to know that we got your message and that we will get back to you as soon as we can. Have a wonderful day!"
	));*/

}