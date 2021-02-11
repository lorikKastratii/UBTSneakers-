<?php include "inc/layout.php";include "Models/Product.php"; 
    use Admin\Models\Product;
?>
<style>
    <?php include "css/add_form.css" ?>
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
        <form action="" method="post" id="add_form" enctype="multipart/form-data">
            <label for="Name">Name</label>
            <input type="text" name="name" id="inputField">
        
            <label for="Description">Description</label>
            <input type="text" name="description" id="inputField">

            <label for="Price">Price</label>
            <input type="text" name="price" id="inputField">

            <label for="Category">Category</label>
            <select name="category">
                <option value="0" hidden>Select category</option>
                <option value="1">Sneakers </option>
                <option value="2">Sport</option>
            </select>

            <label for="Image">Image</label>
            <input type="file" name="file" id="">          
            <!-- <input type="text" name="image" id="inputField"> -->

            <input type="submit" value="Add" name="add_product" id="addBtn">
        </form>
    </div>



<?php include "inc/endLayout.php" ?>