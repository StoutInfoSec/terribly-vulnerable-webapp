
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Terribly Vulnerable Webapp</title>
</head>
<body>
    <!--**** ~ ~ ~ Navigation Bar ~ ~ ~ *****-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item">
                <!-- TVA logo here -->
                <a id="logo" class="navbar-brand" href="index.html">TVA</a>
            </li>
            <li class="nav-item">
                <button class="navbar-toggler" type="button"
                        data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="challenges.html">Challenges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="exploits.html">Exploits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="payloads.html">Payloads</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="trophies.html">Trophies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="resources.html">Resources</a>
                        </li>
                    </ul>
                    <div id="search-bar">
                        <form class="form-inline" action="/action_page.php">
                            <input class="form-control mr-sm-2"
                                   type="text" placeholder="Search">
                            <button class="btn btn-success"
                                    type="submit">
                                Search
                            </button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <!-- ****** ~ ~ ~ Page Body ~ ~ ~ ****** -->
    <div class="well well-sm">
        <div class="jumbotron" id="page-hdr">
            <h1>SQL Challenge Level 1</h1>
            <small>
                <p>
                    "Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua"
                </p>
				<?php
					echo test;
				?>
				<script>
<a href="#" data-toggle="modal" data-target="#login-modal">Login</a>

<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	  <div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Login to Your Account</h1><br>
				  <form>
					<input type="text" name="user" placeholder="Username">
					<input type="password" name="pass" placeholder="Password">
					<input type="submit" name="login" class="login loginmodal-submit" value="Login">
				  </form>
					
				  <div class="login-help">
					<a href="#">Register</a> - <a href="#">Forgot Password</a>
				  </div>
				</div>
			</div>
		  </div>
            </small>
        </div>
        <div class="well well-lg" id="card-box">
            <div id="body-div">
                
            </div>
        </div>
    </div>
    <!-- ****** ~ ~ ~ Footer ~ ~ ~ ****** -->
    <footer class="col">
        <nav class="navbar navbar-expand-sm bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="TODO.html" class="nav-link">Help</a>
                </li>
                <li class="nav-item">
                    <a href="TODO.html" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="TODO.html" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="TODO.html" class="nav-link">Disclaimer</a>
                </li>
            </ul>
        </nav>
    </footer>
</body>
</html>
