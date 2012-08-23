<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
	<title>Email signup form</title>
</head>
<body>
	<?php
	
		// Check if a cookie has been set for users who have already filled out the form.
		if(isset($_COOKIE["Emailsignup"])){
			$dacookie = "yes";
		}
		
		// Or see if your server sent the user to the form and set a cookie that way.
		if(strstr($_SERVER['HTTP_REFERER'],"yourwebsite")){
			setcookie("Emailsignup", "complete");
			$dacookie = "yes";
		}
	?>
	
	<?php
	
		// If the cookie hasn't been set, display the form.
		if($dacookie != "yes"){
	?>
		<!-- The form! -->
		<form id="signupform" class="signupform" name="signupform" method="GET" action="action.php">
			<label for="email">Signup now:</label>
			<span class="fieldwrap"><input type="text" name="emailfield" id="emailfield" class="emailfield" placeholder="you@website.com" /></span>
			<input type="submit" name="submit" value="Submit" class="submit" />
		</form>
	<?php
		} else {
		
			// Otherwise, if a cookie exists, show something other than the form.
			echo "<p>Thanks for signing up!</p>";
		}
	?>
	
</body>
</html>