<?php

    /*level 1: store password as plain text*/
	
	//$salt="fsdejvvnfrgod"; /*level 3: variable $salt is stored at the user computer*/
	                         /*not in the databse, and $salt is added to md5
							 HOWEVER, hacker can still access password */
							 /*when user set their lvl 1 password too weak*/
						   
    //echo md5($salt."password"); /*level 2:turn the word "password" to
	                       /*a complicated string, but could still
						   be translated if hacker understand the
						   md5 translation
						   If long string, there ma be difficulties to find password*/						   
	
	echo md5(md5($row['id'])."password"); /*level 4: hashing md5($row['id']), which is an id of 
	                                      an user, which is different for everybody,
										  then hash the id, adding to the lvl1 password,
										  then hash again*/

?>