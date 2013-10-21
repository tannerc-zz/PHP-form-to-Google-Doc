<?php

	// Check if the email field in your form was submitted.
	if(isset($_GET['emailfield'])){
		$daemail = $_GET['emailfield'];
	
		function isValidEmail($email){
			return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
		}
		
		// First check if email is legit.
		if(isValidEmail($daemail)) {
		
			// Now submit the form via php CURL function.
			$url = 'https://docs.google.com/forms/d/' . YOUR-FORM-KEY . '/formResponse';
			$body = 'entry.0.single=' . $daemail;
			$c = curl_init ($url);
			curl_setopt ($c, CURLOPT_POST, true);
			curl_setopt ($c, CURLOPT_POSTFIELDS, $body);
			curl_setopt ($c, CURLOPT_RETURNTRANSFER, true);
			$page = curl_exec ($c);
			curl_close ($c);
			
			// And set a cookie so users won't see the email submission form again.
			setcookie("Emailsignup", "subscribed");
			header('Location:http://yourwebsite.com');
		} else {
			
			// If email looks invalid then throw an error.
			echo "Oops, something broke. Please go back and try again.";
		}
	} else {
	
		// If the form wasn't submitted then do some magic.
		echo "Error.";
	}
?>
