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
	
	    $emailTo = "ntukhai@gmail.com";
		$subject = "goodbye";
		$body = "This is some new code";
		$headers = "From: ntukhai@gmail.com";
		
		if (mail($emailTo, $subject, $body, $headers)) {
			
			echo "Mail sent successfully!";
			
		} else {
			
			echo "Mail not sent";
			
		}
	
	?>

</div>	
</body>	
</html>	