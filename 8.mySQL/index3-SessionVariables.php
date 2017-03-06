<?php

    session_start(); /*has to start before you go anywhere else of your code*/
	
	//$_SESSION['loginid']=1; /*even when this is deleted, the variable is still 1*/
	                            /*the variable stays active until the user close it
								$_SESSION is a special array that could keep the value 
								      even when some accidential events happen*/									  
	
	echo $_SESSION['loginid'];
	
	/*session_start() is a mark for the page, 
	indicate that you can access 
	the $SESSION array in that page
	=> When delete session_start() in the loggedin.php,
	it can't access the $SESSION array anymore*/

?>