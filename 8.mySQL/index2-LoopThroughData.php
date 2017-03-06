<?php

    $link = mysqli_connect("localhost", "cl28-example-4k0", "eqzVB!9cV", "cl28-example-4k0"); 
	
	if (mysqli_connect_error()) {
		
		die("Could not connect to the database"); /* stop connect to database and print the error
		                                                     echo would print the error message, but continue to connect to database, which may cause crash*/
		
	}
	
	//$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Beth', 'beth@gmail.com', 'apples')";
	
	//$query="UPDATE `users` SET `name`='flower' WHERE `name`='Beth'"; /*even there are more than `id`=3, still update only 1 row*/
	
	//mysqli_query($link, $query);
	
	
	//$query = "SELECT * FROM users WHERE email LIKE '%h%' AND id<4 AND password!=''"; /*users with email that have letter h at any place
	                                                        /*h%: letter h at the beggining of the email 
															%h: letter h at the end of the email
															this search is case insensitive*/
	
	/*symbol * means select from every field in the table `users`*/
	
	
	//$query = "UPDATE `users` SET name='Ian O\'Neil' WHERE id=2 LIMIT 1";
	//mysqli_query($link, $query);
	
	
	$name="Ian O'Neil"; /*mysqli_real_escape_string($link, $name) function remove all prombles relate to single-double quote name for variable $name (tricky characters) in the content $link of the database*/
	
	$query = "SELECT `name` FROM users WHERE name='".mysqli_real_escape_string($link, $name)."'";
	
	if ($result = mysqli_query($link, $query)) {
		
		echo mysqli_num_rows($result);
		
		while ($row = mysqli_fetch_array($result)) { /*row is the array contain the result of the first line of this query*/
		
		    print_r($row);
		
		}
		
	} else {
		
		echo "It failed";
		
	}

?>