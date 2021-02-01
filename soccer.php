<?php include "inc/header.php"; ?>

<style>
    <?php include "css/soccer.css" ?>
</style>


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

    <?php include "inc/footer.php" ?>
    