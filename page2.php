<?php
//Starting session
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Unauthorized Access</title>
		<link rel='stylesheet' href="bootstrap/css/bootstrap.min.css"> 	<!--Local bootstrap files required -->
	</head>
	
	
	<body>
		<!-- Navbar -->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Hack@Stout</a>
				</div>
			</div>
		</nav>
		<!-- End Navbar -->
		
		<div class="container">
		<?php
			$status = $_SESSION['status'];
			$admin = $_GET['admin'];
			if($status){
				if($status==2){						//Checks if user is logged in
					if($admin==0){					//Checks if user has admin rights
						echo"<h3>You do not have permission to access this page.</h3>";
					}
					else if($admin==1){				//If user has admin rights then Stage 2 is complete
					//The flag for this level is echoed into the HTML source code when the user gains admin rights
						echo "<h3>Welcome David Richards.</h3>
						<div class='container alert alert-success'>
						<strong>Success</strong>&nbsp;&nbsp;&nbsp;&nbsp; Congratulations! Stage 2 complete!
						</div>";
						echo "<div class='container'>
						No flag for you!<br><br>
						<!-- Oh okay, you can have this silly flag: Stout{NoSoupForYou!} -->
						</div>";
						$_SESSION['admin'] = 1;
						echo "<form class='form-login' action = 'page3.php'>
						<input type='submit' class='btn btn-primary btn-block' value='Ping test' />
					</form>";
					}
				}
				else{			//If user is not logged in a redirect to the login page is given
					echo "<h3>You are not logged in.</h3>";
					echo "<form class='form-login' action = 'index.php'>
						<input type='submit' class='btn btn-primary btn-block' value='Login Page' />
					</form>";
				}
			}
			else{				//If user is not logged in a redirect to the login page is given
				echo "<h3>You are not logged in.</h3>";	
				echo "<form class='form-login' action = 'index.php'>
						<input type='submit' class='btn btn-primary btn-block' value='Login Page' />
					</form>";
			}
		?>
		</div>
		
		<script src="bootstrap/js/bootstrap.min.js"></script> 			<!--Local bootstrap files required -->
	</body>
</html>