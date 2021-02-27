<?php ob_start();
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- header css -->
    <link rel="stylesheet" href="css/header.css">
    <script src="javascript/myJs.js"></script>
    <style>
        .logged {
            display:flex;
            width:90vw;
            margin:0 auto;
            height:50px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .logoutForm{
            display:flex;
            width:50vw;
            align-items:center;
        }
        #logout{
            padding:5px 10px;
            background-color: rgb(85, 85, 85);
            border-radius:5px;
            color:white;
        }
    </style>


</head>
<body>

        <?php
            // if(isset($_SESSION['user'])){
            //     echo "<div class='loggedIn'>
            //         <form method='post'>
            //             <input type='submit' name='logout' value='Logout' id='logout'>
            //         </form>
            //     </div>";
            // }

            if(isset($_SESSION['user'])){
                echo "
                <div class='logged'>
                    <form method='post' class='logoutForm'>
                        <label>Logged in as: <b>" . $_SESSION["user"]["email"] ."</b></label>
                        <input type='submit' value='Logout' name='logout' id='logout'>
                    </form>
                </div>
                
                ";
            }

            if(isset($_POST['logout'])){
                session_unset();
                header("location:index.php");
            }
        
        ?>
    
    <header class="header">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="sneakers.php">Sneakers</a></li>
            <li><a href="soccer.php">Soccer</a></li>
            <li><a href="about.php">About Us</a></li>
            <?php 
            if(isset($_SESSION['user'])){
                echo "<li><a href='admin/index.php'>Admin Dashboard</a></li>";
                
            } else {
                echo "<li><a href='login.php'>BECOME A MEMBER</a></li>";
            }
            ?>
            
        </ul>
    </header>

   