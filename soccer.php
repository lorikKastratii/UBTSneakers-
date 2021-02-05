<?php 
    use Admin\Models\Product;
    use Admin\Models\User;
    include "inc/header.php";
    include_once "admin/models/product.php";
    include_once "admin/models/user.php";
?>
<style>
    <?php include "css/soccer.css" ?>
</style>

    <div id="mainPhotoPanel">
        <img src="images/football.jpg" alt="">
    </div>

    <div class="container" style="border:1px solid red;">

        <div class="menuButtons"  style="border:2px solid blue;">
            <button class="buttons" onclick="artificialGrassDiv()">Artificial Grass</button>
            <button class="buttons" onclick="indoorDiv()">Indoor</button>
            <button class="buttons" onclick="softGroundDiv()">Soft Ground</button>
            <button class="buttons" onclick="mainMenuDiv()">Multi-Ground</button>
        </div>

        <div class="main">
            <?php
                $product = new Product();
                foreach ($product->find_product_categories(2) as $p){
                    // $user = new User();
                    // $user = $user->find_id($p->getInsertedBy());
                    echo "<div class='item' style='border:1px solid green;'>";
                        
                        echo "<img src='images/" . $p->getImage() . "'>";
                        echo "<h1>" . $p->getName() . "</h1>";
                        echo "<p>" . $p->getPrice() . "$</p>";
                        echo "<p style='font-size:12px;'>Posted by:" . $user->getFirstname() . "</p>";
                    echo "</div>";  
                }
            ?>

        </div>

    </div>






    <?php include "inc/footer.php" ?>