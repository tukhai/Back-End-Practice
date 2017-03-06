<?  
    /*this part is to get the existed content of 
	the `diary` column of that id back to textarea 
	whenever user open the app*/
    session_start();
	
	include("connection.php");
	
	$query="SELECT diary FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	$result = mysqli_query($link, $query);
	
	$row = mysqli_fetch_array($result);
	
	$diary = $row['diary'];
	
	if (!$row) {
		header("Location:index.php");
	}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Princess Diary</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<style>
		
	    .navbar-brand {
		    font-size:1.8em;
		}

        #topContainer {
		    background-image:url(picjumboROMANTIC.jpg);
			
			width:100%;
			background-size:cover;
		}	

        #topRow {
		    margin-top:100px;
			text-align:center;
		}

        #topRow h1 {
		    font-size:300%;
		}		
		
		.bold {
		    font-weight:bold;
		}
		
		.marginTop {
		    margin-top:30px;
		}
		
		.center {
		    text-align:center;
		}
		
		.title {
		    margin-top:100px;
			font-size:300%;
		}
		
		#footer {
		    background-color:#B0D1FB;
			padding-top:70px;
			width:100%;
		}
		
		.marginBottom {
		    margin-bottom:30px;
		}
		
		.appstoreImage {
		    width:250px;
		}
		
		.transparent {
			opacity:0.3;
		}
	    
	</style>
	
  </head>
  <body>
  
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
	 
	    <div class="navbar-header pull-left">
		
			
			<a class="navbar-brand">Princess Diary</a>
		
		</div>
		
		
		<div class="pull-right">
		
		    <ul class="nav navbar-nav pull-right">
			    <!--<li class="active"><a href="#home">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#download">Download The App</a></li>-->
				<li><a href="index.php?logout=1">Log Out</a></li>
			</ul>
			
			
			<!--<form class="navbar-form navbar-right" method="post">
			    <div class="form-group">
				    <input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
				</div>
				<div class="form-group">
				    <input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
				</div>
				<input type="submit" name="submit" class="btn btn-success" value="Log In" />			
			</form>-->
			
		
	    </div>
		
	</div>
  </div>
  
  <div class="container contentContainer" id="topContainer">
  
    <div class="row">
	
	    <div class="col-md-6 col-md-offset-3" id="topRow">
		
		    
			<textarea class="form-control transparent"><?php echo $diary; ?></textarea> <!--this print out the value of the diary 
			                                                                            variable in the database-->
																						
		
		
		</div>
	
	</div>
	  
  </div>
  
  <!--<div class="container contentContainer">
  
    <div class="row" class="center">
	
	    <h1 class="center title">Why This App is Awesome</h1>
	    <p class="lead center">Sumary of the app's awesomeness</p>
	
	</div>
	
	
	<div class="row marginBottom">
	
	    <div class="col-md-4 marginTop">
		
		    <h2><span class="glyphicon glyphicon-music"></span> Header</h2>
			
			<p>A brief description of one of the best features of your app. Maybe little more text.
			A brief description of one of the best features of your app. Maybe little more text.
			A brief description of one of the best features of your app. Maybe little more text.</p>
		
		    <button class="btn btn-success marginTop">Sign Up!</button>
		
		</div>
		
		
		<div class="col-md-4 marginTop">
		
		    <h2><span class="glyphicon glyphicon-off"></span> Header</h2>
			
			<p>A brief description of one of the best features of your app. Maybe little more text.
			A brief description of one of the best features of your app. Maybe little more text.
			A brief description of one of the best features of your app. Maybe little more text.</p>
		
		    <button class="btn btn-success marginTop">Sign Up!</button>
		
		</div>
		
		
		<div class="col-md-4 marginTop">
		
		    <h2><span class="glyphicon glyphicon-pencil"></span> Header</h2>
			
			<p>A brief description of one of the best features of your app. Maybe little more text.
			A brief description of one of the best features of your app. Maybe little more text.
			A brief description of one of the best features of your app. Maybe little more text.</p>
		
		    <button class="btn btn-success marginTop">Sign Up!</button>
		
		</div>
	</div>
  
  </div>
  
  <div class="container contentContainer" id="footer">
    
    <div class="row">
	    <h1 class="center title">Download The App!</h1>
		
		<p class="lead center">Really, why the hell should I download this app?</p>
		
		<p class="center"><a href="http://www.apple.com/itunes/download/"><img src="App.png" class="appstoreImage"/></a></p>
	</div>
	
  </div>-->
  
  
  

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
	
	    $(".contentContainer").css("min-height",$(window).height());
		
		$("textarea").css("height",$(window).height()-130);
		
		$("textarea").keyup(function() { /*keyup function would change things immeadiately when we change the text in textarea*/
			
			$.post("updatediary.php", {diary:$("textarea").val()}); /*post updatediary.php with the content of the 
			                                                        textarea field as the diary variable*/
																	/*this is AJAX jQuery POST function*/
																	/*variable diary here is given the content of textarea(diary is the name of the variable)
																	in updatediary.php, $_POST['diary'] would search for 
																	variable with name 'diary' and update the value content
																	of that variable to the `diary` column in the database*/
			
		});
	
	</script>
	
	
	
  </body>
</html>



