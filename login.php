<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- lidhja me headercss -->
    <link rel="stylesheet" href="css/header.css" type="text/css">

    <!-- lidhja me footercss -->
    <link rel="stylesheet" href="css/footer.css" type="text/css">

    <!-- lidhja me css -->
    <link rel="stylesheet" href="css/login.css" type="text/css">

    <!-- lidhja me validimin e formes -->
    <script src="javascript/myJs.js"></script>

    
     


   

    <title>UBT Sneakers | Be a Member</title>

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


    <div class="main">
          

        <div id="memberSlogan">
            <h1>Member Login</h1>

        </div>
        <div id="loginForm">               
                <div id="buttonsBox">
                    <button class="buttons"id="loginButtonLogin">Login</button>
                    <button class="buttons" id="loginButtonRegister" onclick="registerForm()">Register</button>

                </div>
                
                <form id="form">
                    <label>Username:</label>
                    <input type="text" name="username" id="username"  class="txtField" placeholder="username">
                   
                    <label>Password:</label>
                    <input type="password" name="password" id="password"  class="txtField" placeholder="password">
                   
                    <input type="button" name="login" class="submitButton" value="Login" onclick="validateLogin()">
                    <div id="error">
                        
                    </div>
                </form>
        </div>

        
        <div id="registerForm" style="height: 450px;">
            <div id="buttonsBox">
                <button class="buttons"id="registerButtonLogin" onclick="loginForm()">Login</button>
                <button class="buttons" id="registerButtonRegister">Register</button>
            </div>
            
            <form id="form2">
                <label style="margin-top: 10px;">Username:</label>
                <input type="text" name="usernameRegister" id="usernameRegister"class="txtField" placeholder="username">
                
                <label>Email:</label>
                <input type="email" name="emailRegister" id="emailRegister"  class="txtField" placeholder="email">
                
                <label>Password:</label>
                <input type="password" name="passwordRegister" id="passwordRegister"class="txtField" placeholder="password">

                <input type="button" name="register" class="submitButton" value="Register" id="registerButton" onclick="validateRegister()">
                
                <div id="errorRegister">
                    
                </div>
            </form>
        </div>

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
    
    
    

</body>
</html>