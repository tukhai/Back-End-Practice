<?php

    $myArray=array("pizza", "chocolate", "coffee");
	print_r($myArray);
	echo $myArray[0];
	
	echo"<br /><br />";
	
	$anotherArray[0]="pizza";
	$anotherArray[1]="sho";
	print_r($anotherArray);
	
	echo"<br /><br />";
	
	$thirdArray=array(
	
	    "France" => "French", 
		"USA" => "English",
		"Germany" => "German"
	
	);
	print_r($thirdArray);
	
	$anotherArray[]="salad";
	
	echo"<br /><br />";
	
	print_r($anotherArray);
	
	echo"<br /><br />";
	
	unset($thirdArray["Germany"]);
	
	print_r($thirdArray);
	
	echo"<br /><br />";
	
	$name="Rob"; unset($name);
	echo $name;
	

?>