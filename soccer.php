<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/soccer.css">

    <!-- header css -->
    <link rel="stylesheet" href="css/header.css">
    
    <!-- footer css -->
    <link rel="stylesheet" href="css/footer.css">
    <script src="javascript/myJs.js"></script>

    <title>UBT Sneakers | Soccer</title>


</head>
<body>
    
    <header class="header">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="sneakers.html">Sneakers</a></li>
            <li><a href="soccer.html">Soccer</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="login.html">BECOME A MEMBER</a></li>
        </ul>
    </header>

    <div id="mainPhotoPanel">
        <img src="images/football.jpg" alt="">
    </div>

    <!-- <div id="asideLeft">
          <button class="button" onclick="artificialGrassDiv()">Artificial Grass</button>
          <button class="button" onclick="indoorDiv()">Indoor</button>
          <button class="button" onclick="softGroundDiv()">Soft Ground</button>
          <button class="button" onclick="mainMenuDiv()">Multi-Ground</button>

        </div> -->



    <div class="container">

        <div class="menuButtons">
            <button class="buttons" onclick="artificialGrassDiv()">Artificial Grass</button>
            <button class="buttons" onclick="indoorDiv()">Indoor</button>
            <button class="buttons" onclick="softGroundDiv()">Soft Ground</button>
            <button class="buttons" onclick="mainMenuDiv()">Multi-Ground</button>
        </div>

        <!-- main items -->
        <div id="mainMenu">

            <div class="menuItems">
                <img src="images/nikePhantom.png" alt="">
                <h3>Nike Phantom Vision</h3>
            </div>

            <div class="menuItems">
                <img src="images/nikeMercurial.png" alt="">
                <h3>Nike Mercurial Vapor 13</h3>
            </div>

            <div class="menuItems">
                <img src="images/nikeTiempo.png" alt="">
                <h3>Nike Tiempo Legend 8</h3>
            </div>

            <div class="menuItems">
                <img src="images/nikeMercurialSuperfly7.png" alt="">
                <h3>Nike Tiempo Legend 8</h3>
            </div>

      
        </div>

        <!-- indoor football boots -->
        <div id="indoorDiv" style="display: none;">

            <div class="menuItems">
                <img src="images/indoor1.png" alt="">
                <h3>Nike Mercurial Vapor 13</h3>
            </div>

            <div class="menuItems">
                <img src="images/indoor2.png" alt="">
                <h3>Nike Tiempo Legend 8</h3>
            </div>

            <div class="menuItems">
                <img src="images/indoor3.png" alt="">
                <h3>Nike Tiempo Legend 8</h3>
            </div>

            <div class="menuItems">
                <img src="images/indoor3.png" alt="">
                <h3>Nike Mercurial Superfly 7</h3>
            </div>

        </div>  
        <!-- soft ground football boots -->

        <div id="softGroundDiv" style="display: none;">

            <div class="menuItems">
                <img src="images/softGround1.jpg" alt="">
                <h3>Nike Mercurial Vapor 13</h3>
            </div>

            <div class="menuItems">
                <img src="images/softGround2.png" alt="">
                <h3>Nike PhantomVNM Academy</h3>
            </div>

            <div class="menuItems">
                <img src="images/softGround3.png" alt="">
                <h3>Nike Phantom Venom Elite</h3>
            </div>

            <div class="menuItems">
                <img src="images/softGround4.png" alt="">
                <h3>Nike Phantom Vision Elite</h3>
            </div>
           
        </div>

        <!-- artifical grass football boots -->
        <div id="artificialGrassDiv" style="display: none;">

            <div class="menuItems">
                <img src="images/aGrass1.jpg" alt="">
                <h3>Nike Mercurial Vapor 13</h3>
            </div>

            <div class="menuItems">
                <img src="images/aGrass2.png" alt="">
                <h3>Nike Mercurial Vapor 13</h3>
            </div>

            <div class="menuItems">
                <img src="images/aGrass3.jpg" alt="">
                <h3>Nike Mercurial Superfly 7</h3>
            </div>

            <div class="menuItems">
                <img src="images/aGrass4.png" alt="">
                <h3>Nike Mercurial Vapor 13</h3>
            </div>
        </div>

        <hr>

        <div class="trendingTitle">
            <h1>trending now</h1>
        </div>
        
        <div class="chooseYourBoot">
            <div class="phantomBoot">
                <img src="images/phantom.png" alt="">
            </div>
            <div class="mercurialAndTiempo">
                <div class="mercurial">
                    <img src="images/nikeMercurialOrange.png" alt="">
                </div>
                <div class="tiempo">
                    <img src="images/nikeTiempoBlue.png" alt="">
                </div>
            </div>
        </div>

    </div>
    <!-- end of container -->
    <hr>
    <footer class="footer">
        <img src="images/logo.png" width="155px" height="90px" alt="logo">
        <div class="footer-menu">
            <a href="home.html">About</a>
            <a href="home.html">FAQ</a>
            <a href="home.html">Size Guide</a>
            <a href="home.html">Shipping</a>
            <a href="home.html">Payment</a>
        </div>

        <div class="socialNetworks">
            <img src="images/twitter.png" alt="">
            <img src="images/facebook.png" alt="">
            <img src="images/instagram.png" alt="">
            <img src="images/linkedin.png" alt="">
        </div>
        <div class="references">
            <a href="home.html">@UBTSneakers. All rights reserved</a>
            <a href="home.html">LK | EM | Privacy Policy</a>
        </div>
    </footer>




    <script src="javascript/myJs.js"></script>
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <!-- <script src="javascript/function.js"></script> -->
</body>
</html>