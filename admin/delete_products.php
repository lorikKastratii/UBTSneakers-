<?php include_once "inc/layout.php"; include_once "Models/Product.php"; use Admin\Models\Product; ?>

<style>
    <?php include "css/delete_form.css" ?>
</style>

<?php 
        $product=new Product();
        if(isset($_GET['id'])){
        $product=$product->find_id($_GET['id']);

        if(isset($_POST['delete_product'])){
            $product->delete();
        }
    }
?>


<div class="mainContent">
        <h1>Delete Product</h1>
        <form action="" method="post" id="delete_form">
        <label for="Name">Name</label>
            <input type="text" name="name" id="inputField" disabled value=<?php echo $product->getName(); ?>>
        
            <label for="Description">Description</label>
            <input type="text" name="description" id="inputField" disabled value=<?php echo $product->getDescription(); ?>>

            <label for="Price">Price</label>
            <input type="text" name="price" id="inputField"disabled  value=<?php echo $product->getPrice(); ?>>

            <label for="Image">Image</label>
            <input type="text" name="image" id="inputField" disabled value=<?php echo $product->getImage(); ?>>

            <input type="submit" value="Delete" name="delete_product" id="deleteBtn">
        </form>
    </div>









<?php include_once "inc/endLayout.php" ?>