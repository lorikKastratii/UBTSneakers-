<?php 
    use Admin\Models\Product;
    use Admin\Models\User;
    include "inc/header.php";
    include_once "admin/models/product.php";
    include_once "admin/models/user.php";
?>

<style>
    <?php include "css/sneakers.css" ?>
</style>

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
                <li><a href="sneakers.php">FEATURED | </a></li>
                <li><a href="sneakers.php">NEW | </a></li>
                <li><a href="sneakers.php">BEST | </a></li>
                <li><a href="sneakers.php">SPECIAL</a></li>
            </ul>
        </div>
    </div>
    
    <div class="container">

        <?php
            $product = new Product();
            foreach ($product->find_all() as $p){
                $user = new User();
                $user = $user->find_id($p->getInsertedBy());
                echo "<div class='item'>";
                    
                    echo "<img src='images/" . $p->getImage() . "'>";
                    echo "<h1>" . $p->getName() . "</h1>";
                    echo "<p>" . $p->getPrice() . "$</p>";
                    echo "<p style='font-size:12px;'>Posted by:" . $user->getFirstname() . "</p>";
                echo "</div>";  
            }
        ?>

    </div>


    <?php include "inc/footer.php" ?>