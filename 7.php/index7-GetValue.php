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
	
	    if ($_GET["submit"]) { /*return true if variable with the name of "submit" has a value*/
		
		    if ($_GET["name"]) /*return true if variable with the name of "name" has a value*/ {
			
			    echo "Your name is ".$_GET['name']; /*$_GET['name'] and $_GET["name"] are exactly the same,
				                                      which return the value of variable "name", but in this case have to do this to avoid confusing*/
			
		    } else {
				
				echo "Please enter your name";
				
			}
			
		}
	
	?>

    <form>
	    
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