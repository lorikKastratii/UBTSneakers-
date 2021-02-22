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

            if(isset($_POST['register'])){
                $user = new User();
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['emailRegister'];
                $password = $_POST['passwordRegister'];
                if(strlen($firstname) < 0 
                || strlen($lastname) < 0 
                || strlen($email) < 0 
                || strlen($password) < 0){
                    echo "You must fill every field !";
                }else {
                    $user->setFirstname($firstname);
                    $user->setLastname($lastname);
                    $user->setEmail($email);
                    $user->setPassword($password);
                    $user->setRole(2);
                    $user->register();
                }
            }
        ?>
        <div id="loginForm">               
                <div id="buttonsBox">
                    <button class="buttons"id="loginButtonLogin">Login</button>
                    <button class="buttons" id="loginButtonRegister" onclick="registerForm()">Register</button>

                </div>
                
                <form id="form" method="post">
                    <label id="loginError"></label>
                    <label>Email:</label>
                    <input type="email" name="email" id="email"  class="txtField" placeholder="email">
                   
                    <label>Password:</label>
                    <input type="password" name="password" id="password"  class="txtField" placeholder="password">
                   
                    <input type="submit" name="login" class="login submitButton" value="Login" onclick="validateLogin()">
                    
                </form>
        </div>

        
        <div id="registerForm" style="height: 450px;">
            <div id="buttonsBox">
                <button class="buttons"id="registerButtonLogin" onclick="loginForm()">Login</button>
                <button class="buttons" id="registerButtonRegister">Register</button>
            </div>
            
            <form id="form2" method="post">
                
                <label >Firstname:</label>
                <input type="text" name="firstname" id="firstnameRegister" class="txtField" placeholder="firstname">

                <label style="margin-top: 10px;">Lastname:</label>
                <input type="text" name="lastname" id="lastnameRegister" class="txtField" placeholder="lastname">
                
                <label>Email:</label>
                <input type="email" name="emailRegister" id="emailRegister"  class="txtField" placeholder="email">
                
                <label>Password:</label>
                <input type="password" name="passwordRegister" id="passwordRegister"class="txtField" placeholder="password">

                <input type="submit" name="register" class="register submitButton" value="Register" id="registerButton" onclick="validateRegister()">
                <label id="errorRegister" style="height:30px;"></label>
               
            </form>
        </div>

    </div>



    <!-- <scrip src="javascript/validate.js"></scrip> -->

    <?php include "inc/footer.php" ?>
    <script src="javascript/validate.js"></script>
    
    

</body>
</html>