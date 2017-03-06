<?php
	
	if ($_POST['submit']) {
		
		if (!$_POST['email']) $error.="<br />Please enter your email";
		    else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email address";			
		
		if (!$_POST['password']) $error.="<br />Please enter your password";
		    else {
				
				if (strlen($_POST['password'])<8) $error.="<br />Please enter a password with at least 8 characters";
				if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please enter at least 1 capital letter in your password";			
				
			}
		if ($error) echo "There were error(s) in your signup details: ".$error;
		else {
			
			$link = mysqli_connect("localhost", "cl28-example-4k0", "eqzVB!9cV", "cl28-example-4k0");
			
			$query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'"; /*mysqli_real_escape_string to avoid SQL injection, hacker could just type in the rest of the code at email, to get user's data*/
			
			$result = mysqli_query($link, $query);
			
			$results = mysqli_num_rows($result);
			
			if ($results) echo "That email address is already register. Do you want to log in?";
			else {
				
				$query="INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')"; /*have to follow the exact syntax mentioned in the previous lessons*/
				
				mysqli_query($link, $query);
				
				echo "You've been signed up!";
				
			}		
			
		}
	}

?>

<form method="post">

    <input type="email" name="email" id="email" />
	
	<input type="password" name="password" />
	
	<input type="submit" name="submit" value="Sign Up" />

</form>