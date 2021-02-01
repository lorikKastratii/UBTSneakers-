<?php 
    Use admin\models\User;
    include_once "inc/header.php";
    include_once "admin/models/User.php";

?>
<style>
    <?php include_once "css/login.css" ?>
</style>
    <div class="main">
          

        <div id="memberSlogan">
            <h1>Member Login</h1>

        </div>

        <?php
            if(isset($_POST["login"])){
                $user = new User();
                $user->login($_POST['email'],$_POST['password']);

            }
        ?>
        <div id="loginForm">               
                <div id="buttonsBox">
                    <button class="buttons"id="loginButtonLogin">Login</button>
                    <button class="buttons" id="loginButtonRegister" onclick="registerForm()">Register</button>

                </div>
                
                <form id="form" method="post">
                    <label>Email:</label>
                    <input type="email" name="email" id="email"  class="txtField" placeholder="email">
                   
                    <label>Password:</label>
                    <input type="password" name="password" id="password"  class="txtField" placeholder="password">
                   
                    <input type="submit" name="login" class="submitButton" value="Login" onclick="validateLogin()">
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

    <?php include "inc/footer.php" ?>
    
    
    

</body>
</html>