
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="level_1.css" rel="stylesheet" type="text/css" />
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
                <?php 
                    require_once '../../scripts/generate_sql.php';
                    $db = new dynamic_DB();
                    $db->populate_users();
                    $mysqli = $db->get_Conn();
                    
                    $username = "";
                    $password = "";
                    if(isset($_POST['username'])){
                        if(empty($_POST['username']) || empty($_POST['password'])){
                            $error = "Username or Password is Invalid";
                        }
                    else{
                        //foo' OR 'bar'='bar
                        $username = $_POST["username"];	
                        $password = $_POST["password"];
                        $error = "login field";

                        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

                        $result = $mysqli->query($sql);

                        if($result->num_rows > 0){
                            header('Location: ./level_1_32094.php');
                        }
                        else
                        {
                            //$error = "Username of Password is Invalid";
                        }
                     }
                    }
                ?>
                <div class="login">
                <h1 align="center">Login</h1>
                <form action="" method="post" style="text-align:center;">
                <input type="text" placeholder="Username" id="user" name="username"><br/><br/>
                <input type="password" placeholder="Password" id="pass" name="password"><br/><br/>
                <input type="submit" value="Login" name="submit">
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/footer.php';?>
</body>
</html>
