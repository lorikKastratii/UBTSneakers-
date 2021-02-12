<?php 
      use Admin\Models\Product;
      use Admin\Models\Category;
    include_once "inc/layout.php";
    // require_once "inc/classes.php";
    include_once "models/category.php";
    include_once "models/product.php";
?>



<style>
    <?php include_once "css/add_form.css" ?>
</style>
    <?php 
        if(isset($_POST["add_product"])){

            $file = $_FILES['file'];
            
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];
            if($fileError === 0){
                $fileDestination = "../images/".$fileName;
                move_uploaded_file($fileTmpName,$fileDestination);
            }
            

            $product=new Product();
            $product->setName($_POST['name']);
            $product->setDescription($_POST['description']);
            $product->setPrice($_POST['price']);
            $product->setImage($fileName);
            $product->setCategory($_POST['category']);
            $product->setInsertBy($_SESSION['user']['id']);
            $product->create();
        }
    
    ?>


    <div class="mainContent">
        <h1>Create Product</h1>
        <?php 
            // $c = new Category();
        ?>
        <form action="" method="post" id="add_form" enctype="multipart/form-data">
            <label for="Name">Name</label>
            <input type="text" name="name" class="inputField">
        
            <label for="Description">Description</label>
            <input type="text" name="description" class="inputField">

            <label for="Price">Price</label>
            <input type="text" name="price" class="inputField">

            <label for="Category">Category</label>
            <select name="category" class="inputField">
                <option value="0" hidden>Select category</option>
            <?php 
                $category = new Category();
                foreach ($category->find_all() as $c){
                    echo "<option value='".$c->getId()."'> " . $c->getName(). " </option>";
                }
            ?>
            </select>

            <label for="Image">Image</label>
            <input type="file" name="file" id="">          
            <!-- <input type="text" name="image" id="inputField"> -->

            <input type="submit" value="Add" name="add_product" id="addBtn">
        </form>
    </div>



<?php include "inc/endLayout.php" ?>