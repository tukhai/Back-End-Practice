<?php

    $array=array("cat", "dog", "turtle", "kangaroo");
	print_r($array);
	
	echo "<br /><br />";
	
	foreach($array as $key => $value) {
		
		echo "Key: $key Value: $value <br />";
		
	}

    /*
    for ($i=500; $i>=100; $i=$i-5) {
		
		echo $i."<br />";
		
	}*/	

?>