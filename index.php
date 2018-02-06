<?php
$inEmail = "";
$emailErrMsg="";

?>
<!DOCTYPE html>
<html>

<head>
    <title>DMACC PORTFOLIO DAY USER SEARCH.</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <div class="row">
        <div class="col-12 nav-background">
            <nav>
                <ul class="desktop-menu">
                    <li class="nav-lead"><a href="#">DMACC Portfolio Day</a></li>
                    <li><a href="#">Graphic Design</a> </li>
                    <li><a href="#">Photography</a></li>
                    <li><a href="#">Web Development</a> </li>
                    <li><a href="#">Video Production</a> </li>
                    <li><a href="#">Animation</a></li>
                </ul>
                <div class="mobile-nav">
                    <a href="#" class="nav-logo">DMACC Portfolio Day</a>
                    <br>
                    <span onclick="openNav()" class="open-hamburger-menu">
                Menu
                <img src="assets/img/menu.png">
              </span>
                </div>
                <div class="mobile-menu" id="mobile-menu">
                    <a href="javascript:void(0)" class="close-btn" onclick="closeNav()"> &times; </a>
                    <a href="#">DMACC Portfolio Day</a>
                    <a href="#">Graphic Design</a>
                    <a href="#">Photography</a>
                    <a href="#">Web Development</a>
                    <a href="#">Video Production</a>
                    <a href="#">Animation</a>
                </div>
            </nav>
        </div>
    </div>
    <div>
        <div class="user-search-container">
            <img class="mix-logo" src="img/dmaccPortfolioDayLogo.svg">

            <h2>Signup for DMACC PORTFOLIO DAY</h2>
            <form class="user-search" action="registerForm.php" method="post">
                <span class="search-icon"></span>
                <input type="text" name="inEmail" placeholder="Search your DMACC email" class="test">
                <input type="submit" name="submitEmail" value="Submit">
            </form>
        </div>

    </div>
    <!-- Optional JavaScript -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/countdown.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
