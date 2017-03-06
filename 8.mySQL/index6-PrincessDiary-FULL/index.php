<? include("login.php"); ?>



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
		
		.white {
		    font-weight:bold;
			color:white;
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
	    
	</style>
	
  </head>
  <body>
  
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
	 
	    <div class="navbar-header">
		
		    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<a class="navbar-brand">Princess Diary</a>
		
		</div>
		
		
		<div class="collapse navbar-collapse">
		
		    <ul class="nav navbar-nav">
				<li><a href="http://images6.fanpop.com/image/quiz/1015000/1015819_1372169119875_480_360.jpg">About</a></li>
				<li><a href="http://www.apple.com/itunes/download/">Download The App</a></li>
			</ul>
			
			
			<form class="navbar-form navbar-right" method="post">
			    <div class="form-group">
				    <input type="email" name="loginemail" placeholder="Email" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
				</div>
				<div class="form-group">
				    <input type="password" name="loginpassword" placeholder="Password" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
				</div>
				<input type="submit" name="submit" class="btn btn-success" value="Log In" />			
			</form>
			
		
	    </div>
		
	</div>
  </div>
  
  <div class="container contentContainer" id="topContainer">
  
    <div class="row">
	
	    <div class="col-md-6 col-md-offset-3" id="topRow">
		
		    <h1 class="marginTop">Princess Diary</h1>
			
			<p class="lead">Your own private diary, with you wherever you go.</p>
			
			
			<?php
			
			    if ($error) {
					
					
					echo '<div class="alert alert-danger">'.addslashes($error).'</div>';
					
					
				}
				
				if ($message) {
					
					
					echo '<div class="alert alert-success">'.addslashes($message).'</div>';
					
					
				}
			
			?>
			
		    
			<p class="bold marginTop">Interested? Signed Up Below!</p>
		
		
		    <form class="marginTop" method="post">
			
			    <div class="form-group">
				
				    <label for="email" class="white">Email Adress</label>
				
					
					<input type="email" name="email" class="form-control" placeholder="Your email" value="<? echo addslashes($_POST['email']); ?>"/> <!--This is to keep the email address in the fill-in so user don't have to retype it-->
				</div>
				
				
				<div class="form-group">
				
				    <label for="password" class="white">Password</label>
				
					
					<input type="password" name="password" class="form-control" placeholder="Password" value="<? echo addslashes($_POST['password']); ?>" /> <!--This is to keep the password in the fill-in so user don't have to retype it-->
				</div>
				
				
				<input type="submit" name="submit" value="Sign Up" class="btn btn-success btn-lg marginTop marginBottom" />
					
				
			
			</form>
		
		
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
	
	</script>
	
	
	
  </body>
</html>



