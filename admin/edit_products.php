<?php include_once "inc/layout.php"; include_once "Models/Product.php"; use Admin\Models\Product; ?>

<style>
    <?php include "css/edit_form.css" ?>
</style>

<?php 
        $product=new Product();
        if(isset($_GET['id'])){
        $product=$product->find_id($_GET['id']);

        if(isset($_POST["edit_product"])){
            $product->setName($_POST['name']);
            $product->setDescription($_POST['description']);
            $product->setPrice($_POST['price']);
            $product->setImage($_POST['image']);
            $product->setCategory(1);
            $product->setInsertBy(1);
            $product->update();
        }
    }
?>


<div class="mainContent">
        <h1>Update Product</h1>
        <form action="" method="post" id="edit_form">
            <label for="Name">Name</label>
            <input type="text" name="name" id="inputField" value=<?php echo $product->getName(); ?>>
        
            <label for="Description">Description</label>
            <input type="text" name="description" id="inputField"  value=<?php echo $product->getDescription(); ?>>

            <label for="Price">Price</label>
            <input type="text" name="price" id="inputField"  value=<?php echo $product->getPrice(); ?>>

            <label for="Image">Image</label>
            <input type="text" name="image" id="inputField"  value=<?php echo $product->getImage(); ?>>

          

            <input type="submit" value="Edit" name="edit_product" id="editBtn"
            <?php if(isset($_SESSION['user'])){
                 if($_SESSION['user']['role'] == 2){
                     echo "disabled style='background-color:red;'";
                 }
             } 
            ?>>
        </form>
    </div>








<?php include_once "inc/endLayout.php" ?>