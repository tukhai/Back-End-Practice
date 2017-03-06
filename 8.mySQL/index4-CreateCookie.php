<?php

    setcookie("id","1234",time()+60*60*24); /*1234 is the id of the cookie
	                                             time()+60*60*24 keeps the cookie exist for 1 day*/
												 
	echo $_COOKIE['id'];

?>