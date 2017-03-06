<?php

    $link = mysqli_connect("localhost", "cl28-example-4k0", "eqzVB!9cV", "cl28-example-4k0"); 
	
	if (mysqli_connect_error()) {
		
		die("Could not connect to the database"); /* stop connect to database and print the error
		                                                     echo would print the error message, but continue to connect to database, which may cause crash*/
		
	}
	
	//$query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES('Beth', 'beth@gmail.com', 'apples')";
	
	$query="UPDATE `users` SET `name`='flower' WHERE `name`='Beth'"; /*even there are more than `id`=3, still update only 1 row*/
	
	mysqli_query($link, $query);
	
	
	$query = "SELECT * FROM users"; /*users is the name of the table*/
	
	if ($result = mysqli_query($link, $query)) {
		
		$row = mysqli_fetch_array($result); /*row is the array contain the result of the first line of this query*/
		
		print_r($row);
		
	} else {
		
		echo "It failed";
		
	}

?>