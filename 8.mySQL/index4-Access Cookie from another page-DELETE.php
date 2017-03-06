<?php

    setcookie("id", "", time()-3); /*get rid of the cookie when the user log out
	                                  /*no need value id of cookie because there's only 1 cookie per page*/
									  /*and we only when it to disappear*/
									  /*time()-3600 set the expire date of the cookie is 1 hour in the past
									  => when refresh the page, it would disappear*/
	
	echo $_COOKIE['id']; /*$_COOKIE by default is a SESSION variable,
	                     which could be accessed anywhere*/

?>