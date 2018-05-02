
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Terribly Vulnerable Webapp</title>
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/header.php';?>
    <!-- ****** ~ ~ ~ Page Body ~ ~ ~ ****** -->
   <div class="well well-sm">
        <div class="jumbotron" id="page-hdr">
            <h1>SQL Challenge 1</h1>
            <small>
                <p>
                    Bypass the login using SQL injection
                </p>
            </small>
        </div>
        <div class="well well-lg" id="card-box">
            <div id="body-div">
            </div>
        </div>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php';?>
</body>
</html>
