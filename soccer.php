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

    <div class="container">



        <div class="main">
            <?php
                $product = new Product();
                foreach ($product->find_all() as $p){
                    if($p->getCategory() == 2){
                        $user = new User();
                        $user = $user->find_id($p->getInsertedBy());
                        echo "<div class='item'>";
                            
                            echo "<img src='images/" . $p->getImage() . "'>";
                            echo "<h1>" . $p->getName() . "</h1>";
                            echo "<p>" . $p->getPrice() . "$</p>";
                            echo "<p style='font-size:12px;'>Posted by:" . $user->getFirstname() . "</p>";
                        echo "</div>";  
                    }
                }
            ?>

        </div>

    </div>






    <?php include "inc/footer.php" ?>