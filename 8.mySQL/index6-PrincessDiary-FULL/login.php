<?php
	
	session_start();
	
	if ($_GET["logout"]==1 AND $_SESSION['id']) {
		
		session_destroy(); /*immeadiately remove all the existing session variables, make them all 0*/
		
		$message="You have been logged out. Have a bad day!";
		
		session_start();
		
	}
	
	include("connection.php"); /*get the link from connection.php*/
	
	if ($_POST['submit'] == "Sign Up") {
		
		if (!$_POST['email']) $error.="<br />Please enter your email";
		    else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email address";			
		
		if (!$_POST['password']) $error.="<br />Please enter your password";
		    else {
				
				if (strlen($_POST['password'])<8) $error.="<br />Please enter a password with at least 8 characters";
				if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please enter at least 1 capital letter in your password";			
				
			}
		if ($error) $error = "There were error(s) in your signup details: ".$error;
		else {
			
			
			
			$query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'"; /*mysqli_real_escape_string to avoid SQL injection, hacker could just type in the rest of the code at email, to get user's data*/
			
			$result = mysqli_query($link, $query); /*doing action for the query*/
			
			$results = mysqli_num_rows($result);
			
			if ($results) $error = "That email address is already register. Do you want to log in?";
			else {
				
				$query="INSERT INTO `users` (`email`, `password`) VALUES('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')"; /*have to follow the exact syntax mentioned in the previous lessons*/
				
				mysqli_query($link, $query);
				
				echo "You've been signed up!";
				
				$_SESSION['id'] = mysqli_insert_id($link); /*mysqli_insert_id($link) return the latest
				                                            id that has been inserted into the database $link*/
		        header("Location:mainpage.php"); /*for browser to redirect to a specific page => can use to redirect in your php script
				                                  but it has to be run like before the output of your file actually begin
												  => can't run the header function after the html has been created
												  but no html in this script => OK*/
				
				//Redirect to logged in page
				
			}		
			
		}
		
	}
	
	if ($_POST['submit'] == "Log In") {
		
		$query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='".md5(md5($_POST['loginemail']).$_POST['loginpassword'])."' LIMIT 1";
		
		$result = mysqli_query($link, $query);
		
		$row = mysqli_fetch_array($result);
		
		if ($row) { /*if user input the correect user name, password*/
			
			$_SESSION['id'] = $row['id'];
			
			header("Location:mainpage.php");
			
			// Redirect to logged in page
			
		} else {
			
			$error = "We could not find a user with that email and password. Try again.";
			
		}
		
	}

?>