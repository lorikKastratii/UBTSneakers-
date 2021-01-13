<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UBT Sneakers</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- lidhje me js slider -->
    <script src="javascript/slider.js"></script>

    <!-- header css -->
    <link rel="stylesheet" href="css/header.css">
    
    <!-- footer css -->
    <link rel="stylesheet" href="css/footer.css">
    <!-- javascript -->
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

     <div id="upperDiv">
       <img src="images/header2.jpg" alt="" style="height: 500px; width:100%;">
    </div>

    <div id="content">
        <div id="slogan">
            <h2 style="margin-top: 20px;">BUY NOW OR CRY LATER</h2>
            <h5 style="font-size: 26px;">Shoes Speak Louder Than Words</h5>
            <button id="buyNowButton"><a href="sneakers.html">BUY NOW</a></button>


        </div>

        <div id="photo">
            <img src="images/justDoIt.png" alt="NIKE JUST DO IT" style="width: 350; height: 400;">
        </div>
    </div>

    <div id="slider">
        <button class="prew" onclick="prewImage()">&larr;</button>
        
        <div id="box">
            <img src="images/basketball.png" alt="">
        </div>

        <button class="next" onclick="nextImage()">&rarr;</button>
    </div>
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

    <!-- <footer class="footer">
        <div class="footerItem1" style="background-color: red;">
            <h2>My Account</h2>
            <ul>
                <li><a href="login.html">Manage Account</a></li>
                <li><a href="login.html">My Orders</a></li>
                <li><a href="login.html">Track My Order</a></li>
                <li><a href="login.html">Sell</a></li>
            </ul>
        </div>
        <div class="footerItem2" style="background-color: yellow;">
            <h2>Get Help</h2>
            <ul>
                <li><a href="login.html">Order Status</a></li>
                <li><a href="login.html">Shipping and Delivery</a></li>
                <li><a href="login.html">Returns</a></li>
                <li><a href="login.html">Payment Options</a></li>
            </ul>
        </div>

        <div class="footerItem3">
            <div id="socialNetworks">
                <img src="images/facebook.png" alt="FACEBOOK LOGO">
                <img src="images/instagram.png" alt="INSTAGRAM LOGO">
                <img src="images/twitter.png" alt="TWITTER LOGO">
                <img src="images/linkedin.png" alt="LINKEDIN LOGO">
            </div>

            <div id="reference">
                <p><a href="https://github.com/lorikKastratii" target="_blank">@ 2020 | Reference | LK</a></p>
                <p><a href="https://github.com/eroditmehmeti" target="_blank">@ 2020 | Reference | EM</a></p>
                <p><a href="https://github.com/erianDauti" target="_blank">@ 2020 | Reference | ED</a></p>
            </div>

        </div>

    </footer> -->

     

     



<!-- slider script -->
 <script>
        var slider_content = document.getElementById('box');
        var image = ['images/basketball.png','images/sneakerClique.jpg'];
        var index = 0;
        function nextImage(){
            if (index == image.length -1){
                index = 0;
            }else {
                index++;
            }
            slider_content.innerHTML = "<img src=" +image[index] + ">";   
        }

        function prewImage(){
            if (Math.abs(index) == image.length - 1){
                index--;
            }else if (index == 0){
                index = image.length-1;
            }else {
                index--;
            }
            slider_content.innerHTML = "<img src=" +image[Math.abs(index)] + ">";
        }
        // setInterval(nextImage,3000);      
    </script> 
  
</body>
</html>  