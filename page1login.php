<?php
//Starting session
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Verify Login</title>
		<link rel='stylesheet' href="bootstrap/css/bootstrap.min.css">
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
		<!-- End navbar -->
		<div class="container">
		<?php
		$inputName = $_POST['user'];
		$inputPass = $_POST['pass'];
		if($_SESSION['status'] == 2){				//Checks if user has already successfully logged in first
			echo "<div class='container alert alert-success'>
				<strong>Login Successful</strong> Congratulations! Stage 1 complete.
				</div>						
				<div class='container'>
				Flag: Stout{Lauda_Solem}<br><br>
				<form class='form-login' method='GET' action = 'page2.php'>		<!--Link to next page if user is logged in-->
					<input type='submit' class='btn btn-primary btn-block' value='Admin Tools' />
					<input type='hidden' name='admin' value=0 />
				</form>
				</div>";
		}
		else{													//if credentials are correct then the SESSION variable 'status' is set to 2
			if($inputName == "Richards872"){					//if credentials are incorrect then 'status' is set to 1
				if($inputPass=="greenApple27"){					//Session status of 0 or 1 means the user is not logged in
					$_SESSION['status'] = 2;					//Session Status 2 means logged in
					echo "<div class='container alert alert-success'>
						<strong>Login Successful</strong>&nbsp;&nbsp;&nbsp;&nbsp; Congratulations! Stage 1 complete!
						</div>						
						<div class='container'>
						<form class='form-login' method='GET' action = 'page2.php'>		<!--Link to next page if user is logged in-->
							<input type='submit' class='btn btn-primary btn-block' value='Admin Tools' />
							<input type='hidden' name='admin' value=0 />
						</form>
						</div>";
				}															//Successful login
				else{
					$_SESSION["status"] = 1;							//Session Status 1 means not logged in
					echo"<h2>Login failed</h2>";
					header('Location: index.php'); 					//Redirect to login page on failed login attempt
					exit();
				}
			}
			else{	
				$_SESSION["status"] = 1;								//Session Status 1 means not logged in
				header('Location: index.php');							//Redirect to login page on failed login attempt
				exit();
			}
		}
		?>
		</div>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>