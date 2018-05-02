<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <title>Terribly Vulnerable Webapp</title>
</head>
<body>
    <?php include 'header.php' ?>
    <!-- ****** ~ ~ ~ Floating Side Bar ~ ~ ~ ****** -->
    <div id="floatingUI" class="btn-group-vertical">
        <button type="button" class="btn btn-primary">Hint</button>
        <button type="button" class="btn btn-primary">Difficulty</button>
        <button type="button" class="btn btn-primary">Learn More</button>
    </div>
    <!-- ****** ~ ~ ~ Page Body ~ ~ ~ ****** -->
    <div class="well well-sm">
        <div class="jumbotron" id="page-hdr">
            <h1>Featured</h1>
            <p>
                "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                enim ad minim veniam, quis nostrud exercitation ullamco laboris
                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum."
            </p>
        </div>
        <div class="well well-lg" id="card-box">
            <div id="body-div">
                <div id="featured" class="media">
                    <div id="feature-list" class="media-left">
                        <img id="card-img" src="images/card_001.png" class="media-object" />
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <h3>Featured Item #1</h3>
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum."
                            </p>
                            <button type="button" class="btn btn-info">Feature 1</button>
                        </div>
                    </div>
                </div>

                <div id="featured" class="media">
                    <div class="media-body">
                        <div class="media-heading">
                            <h3>Featured Item #2</h3>
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum."
                            </p>
                            <button type="button" class="btn btn-info">Feature 2</button>
                        </div>
                    </div>
                    <div id="feature-list" class="media-right">
                        <img id="card-img" src="images/card_002.png" class="media-object" />
                    </div>
                </div>

                <div id="featured" class="media">
                    <div id="feature-list" class="media-left">
                        <img id="card-img" src="images/card_003.png" class="media-object" />
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <h3>Featured Item #3</h3>
                            <p>
                                "Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enim ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur
                                sint occaecat cupidatat non proident, sunt in culpa
                                qui officia deserunt mollit anim id est laborum."
                            </p>
                            <button type="button" class="btn btn-info">Feature 3</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>