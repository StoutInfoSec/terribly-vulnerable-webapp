<?php
//Starting session
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>I need an Injection!</title>
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
			$admin = $_SESSION['admin'];
			if($status){
				if($status==2){			//Checks if user is logged in
					if($admin==0){		//Checks if user has admin rights
						echo"<h3>You do not have permission to access this page.</h3>";
					}
					else if($admin==1){	//Displays ping test if the user has admin rights
						echo "<h3>Admin Tools.</h3>";
						echo"<form>
								Ping: <input name=user><input type=submit name=submit value=Search><br><br>
							</form>";
					}
				}
				else{
					echo "<h3>You are not logged in.</h3>";		//If user is not logged in a redirect to the login page is given
					echo "<form class='form-login' action = 'index.php'>
						<input type='submit' class='btn btn-primary btn-block' value='Login Page' />
					</form>";
				}
			}
			else{
				echo "<h3>You are not logged in.</h3>";			//If user is not logged in a redirect to the login page is given
				echo "<form class='form-login' action = 'index.php'>
						<input type='submit' class='btn btn-primary btn-block' value='Login Page' />
					</form>";
			}
		?>
		</div>
		<pre>
<?php
	if(array_key_exists("user", $_REQUEST)){
		$search=$_REQUEST["user"];
	}
	if($search != ""){
		passthru("ping -c 3 $search");
	}
?>
		</pre>
		<script src="bootstrap/js/bootstrap.min.js"></script> 			<!--Local bootstrap files required -->
	</body>
</html>