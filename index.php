<?php
//Starting session
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Who's There?</title>
		<link rel='stylesheet' href="bootstrap/css/bootstrap.min.css"> <!--Local bootstrap files required -->
	</head>
	
	<body>
		<!-- Navbar -->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">So Terribly Vulnerable</a>
				</div>
				<ul class="nav navbar-nav">
					<!-- <li class="active"><a href="#">Home</a></li> code for active navbar entry-->
					<!-- <li><a href="#">About us</a></li> code for additonal navbar entries-->
					
				</ul>
			</div>
		</nav>
		<!-- End Navbar -->
		
		
		<!-- Login form container
			 Login information passed using POST
			 sent to page1login.php-->
		<div class="container">
			<form class="form-login" method="POST" action="page1login.php">
				<h1>Please sign in</h1>
				<div class="form-group">
					<label for="user">Name:</label>
					<input type="test" class="form-control" id="user" name="user">
				</div>
				<div class="form-group">
					<label for="pass">Password:</label>
					<input type="password" class="form-control" id="pass" name="pass">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Login</button>
			</form>
			
		</div>
		<!--[INTERAL TESTING ONLY, DELETE BEFORE LIVE] Username: Richards872 PW: greenApple27-->
		<br>
		
		<!-- PHP code for checking login status using SESSION variable 'status'-->
		<?php
			$status = $_SESSION['status'];
			if($status){
				if($status==1){
					echo "<div class='container alert alert-danger'>
					<strong>Login Failed</strong> Incorrect username or password.
					</div>";
					session_unset();
				}
			}
				
		?>
		<script src="bootstrap/js/bootstrap.min.js"></script> <!--Local bootstrap files required -->
	</body>
</html>