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


</head>
<body>
    <?php
        if(isset($_SESSION['user'])){
            echo "<div>
                <form method='post'>
                    <input type = 'submit' name='logout' value='Logout'>
                </form>
            </div>";
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
            <?php if(isset($_SESSION['user'])){
                if($_SESSION['user']['role'] == 2){
                    echo "<li style='color:white;'>LoggedIn as " . $_SESSION["user"]["firstname"]."</li>";
                }else {
                    echo "<li><a href='admin/index.php'>Admin Dashboard</a></li>";
                }
            } else {
                echo "<li><a href='login.php'>BECOME A MEMBER</a></li>";
            }
            ?>
            
        </ul>
    </header>