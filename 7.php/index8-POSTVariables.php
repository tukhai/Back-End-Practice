<!doctype html>	
<html>	
<head>	
    <title>My first webpage</title>	

    <meta charset="utf-8" />	
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />	
    <meta name="viewport" content="width=device-width, initial-scale=1" />	
	
</head>	

<body>	
<div>

    <?php
	
	/*print_r($_POST); would print the array list of all variables with their respective value
	                  user can't see anything in the url, but we can access them*/
	
	    $names = array("Fred", "Rob", "Ian");
		
		if ($_POST["submit"]) { 
		
		    if ($_POST["name"]) {
			
			    foreach ($names as $name) { /*this only return the value, not return the key*/
					
                    if ($_POST["name"]==$name) {
						
						echo "I know you! Your name is ".$name;
					
					    $knowYou=1;
					
					}
							
				}
				
				if (!$knowYou) echo "I don't know you, ".$_POST['name'];
				
			
		    } else {
				
				echo "Please enter your name";
				
			}
			
		}
	
	?>

    <form method="post">
	    
		<label for="name">Name</label>
		<input name="name" type="text" /> <!-- The type of variable here is "text"; so we could only type in to give the variable a value
		                                        and the name of variable here is "name"
												When we type in, we actually give the variable "name" a certain value-->
		
		<input type="submit" name="submit" value="Submit Your Name"/> <!-- The type of variable here is "submit"; so we could only click submit to give the variable a value
		                                        and the name of variable here is "submit"
												When we click the button, we always give the variable "submit" the value of "Submit Your Name"-->
		
	</form>


</div>	
</body>	
</html>	