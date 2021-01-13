<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBT Sneakers | Sneakers</title>
    <link rel="stylesheet" href="css/sneakers.css">

    <!-- header css -->
    <link rel="stylesheet" href="css/header.css">
    
    <!-- footer css -->
    <link rel="stylesheet" href="css/footer.css">
    
    <script src="javascript/myJs.js"></script>
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

    <div id="newRelease">
        <div id="newReleaseItem1">
            <h2>UNION X AIR JORDAN 4 “OFF NOIR”</h2>
        </div>
        <div id="newReleaseItem2">
            <img src="images/jordan4Union.png" alt="AIR JORDAN 14">
        </div>

    </div>

    <div id="article">
        <div id="trending">
            <h3 style="font-size: 30px;">TRENDING ITEMS</h3>
            <ul>
                <li><a href="sneakers.html">FEATURED | </a></li>
                <li><a href="sneakers.html">NEW | </a></li>
                <li><a href="sneakers.html">BEST | </a></li>
                <li><a href="sneakers.html">SPECIAL</a></li>
            </ul>
        </div>


        <div id="items">

             <!-- AIR FORCE 1 -->
            <div class="firstItems" >
                <img src="images/airForce1White.jpg" class="foto" id="airForcePhoto">
                <a href="index.html" id="airForceLink">AIR FORCE 1 WHITE</a>
                <br>
                <div class="buttonPanel">
                    <button class="colorButton1" onclick="airForce1ColorBlack();"></button>
                    <button class="colorButton2" style="background-color: white;border: 1px solid black; " onclick="airForce1ColorWhite();"></button>
                </div>
                <br>
                <p id="airForce1Price">$80</p>
            </div>

             <!-- AIR JORDAN 1 -->
            <div class="firstItems" id="item2">
                <img src="images/airJordan1Blue.jpg" class="foto" id="airJordan1Photo">
                <a href="sneakers.html" id="airJordan1Link">AIR JORDAN 1 RETRO HIGH OG BG (GS)</a>
                <div class="buttonPanel">
                    <button class="colorButton1" style="background-color: rgb(236, 38, 38); border: 1px solid black;" onclick="airJordan1ColorRed()"></button>
                    <button class="colorButton2" style="background-color: rgb(37, 105, 231); border: 1px solid rgb(212, 46, 46);" onclick="airJordan1ColorBlue()"></button>
                </div>
                <br>
                <p id="airJordan1Price">$325+</p>
            </div>

            <!-- AIR JORDAN 3 -->
            <div class="firstItems" id="item3" >
                <img src="images/airJordan3Black.jpg" class="foto" id="airJordan3Photo">
                <a href="sneakers.html" id="airJordan3Link">AIR JORDAN 3 RETRO 'SPORT BLUE'</a>
                <div class="buttonPanel">
                    <button class="colorButton1" style="background-color: white; border: 1px solid rgb(0, 68, 255);" onclick="airJordan3ColorWhite()"></button>
                    <button class="colorButton2" style="background-color: black; border: 1px solid rgb(0, 68, 255);" onclick="airJordan3ColorBlack()"></button>
                </div>
                <br>
                <p id="airJordan3Price">$225+</p>
            </div>
        </div>
        <br><br><hr>

         <div id="items2">

            <!-- AIR JORDAN 4 -->
            <div class="firstItems" id="item4">
                <img src="images/airJordan4White.jpg" class="foto" id="airJordan4Photo">
                <a href="sneakers.html" id="airJordan4Link">AIR JORDAN 4 RETRO 'MOTORSPORT'</a>
                <div class="buttonPanel">
                    <button class="colorButton1" style="border: 1px solid rgb(0, 68, 255);" onclick="airJordan4Black()"></button>
                    <button class="colorButton2" style="background-color: white;border: 1px solid rgb(0, 68, 255);"onclick="airJordan4White()"></button>
                </div>
                <br>
                
                <p id="airJordan4Price">$250+</p>
            </div>

             <!-- AIR YEEZY 2 -->
            <div class="firstItems" id="item5" >
                <img src="images/airYeezyRed.jpg" class="foto" id="airYeezyPhoto">
                <a href="sneakers.html" id="airYeezyLink">AIR YEEZY 2 SP 'RED OCTOBER'</a>
                <div class="buttonPanel">
                    <button class="colorButton1" onclick="airYeezyBlack()"></button>
                    <button class="colorButton2" onclick="airYeezyRed()"></button>
                </div>
                <br>
                <p id="airYeezyPrice">$25170+</p>
            </div>

             <!-- AIR JORDAN 11 -->
            <div class="firstItems" id="item6" >
                <img src="images/airJordan11Black.jpg" class="foto" id="airJordan11Photo">
                <a href="sneakers.html" id="airJordan11Link">AIR JORDAN 11 RETRO 'BRED 2019'</a>
                <div class="buttonPanel">
                    <button class="colorButton1" style="background-color: white; border: 1px solid black;" onclick="airJordan11White()"></button>
                    <button class="colorButton2" style="background-color: black;border: 1px solid rgb(255, 0, 0);" onclick="airJordan11Black()"></button>
                </div>
                <br>
                <p id="airJordan11Price">$225+</p>
            </div>
        </div>

        
        <div id="items3">

            <!-- CONVERSE -->
            <div class="firstItems" id="item7">
                <img src="images/converseBlack.jpg" class="foto" id="conversePhoto">
                <a href="sneakers.html" id="converseLink">ALL-STAR 70S HI 'PLAY'</a>
                <div class="buttonPanel">
                    <button class="colorButton1" style="background-color: white; border: 1px solid black;" onclick="converseWhite()"></button>
                    <button class="colorButton2" style="background-color: black;" onclick="converseBlack()"></button>
                </div>
                <br>
                <p id="conversePrice">$210+</p>
            </div>


             <!-- VANS -->
            <div class="firstItems" id="item8">
                <img src="images/vansWhite.jpg" class="foto" id="vansPhoto">
                <a href="sneakers.html" id="vansLink">ERA 95 DX (F.O.G) 'FEAR OF GOD'</a>
                <div class="buttonPanel">
                    <button class="colorButton1" style="background-color: white;border: 1px solid black;"></button>
                </div>
                <br>
                <p id="vansPrice">$1500+</p>
            </div>

             <!-- ADIDAS SUPERSTAR -->
            <div class="firstItems" id="item9" >
                <img src="images/adidasSuperstarWhite.jpg" class="foto" id="adidasSuperstarPhoto">
                <a href="sneakers.html" id="adidasSuperstarLink">SUPERSTAR 80S MY ADIDAS 'MY ADIDAS'</a>
                <div class="buttonPanel">
                    <button class="colorButton1" style="background-color: white; border: 1px solid black;"></button>
                </div>
                <br>
                <p id="adidasSuperstarPrice">$345+</p>
            </div>
        </div>
    </div>

    <hr>

    <footer class="footer">
        <img src="images/logo.png" width="155px" height="90px" alt="logo">
        <div class="footer-menu">
            <a href="index.html">About</a>
            <a href="index.html">FAQ</a>
            <a href="index.html">Size Guide</a>
            <a href="index.html">Shipping</a>
            <a href="index.html">Payment</a>
        </div>

        <div class="socialNetworks">
            <img src="images/twitter.png" alt="">
            <img src="images/facebook.png" alt="">
            <img src="images/instagram.png" alt="">
            <img src="images/linkedin.png" alt="">
        </div>
        <div class="references">
            <a href="index.html">@UBTSneakers. All rights reserved</a>
            <a href="index.html">LK | EM | Privacy Policy</a>
        </div>
    </footer>

    
   

</body>
</html>