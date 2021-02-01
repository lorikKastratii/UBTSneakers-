<?php 
    use Admin\Models\Product;
    include_once "inc/layout.php"; 
    include_once "models/product.php";
?>
<style>
    <?php include "css/Products.css"; ?>
</style>




<table class="styled-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $product = new Product();
            foreach($product->find_all() as $p){
                echo "<tr>";
                    echo "<td>" . $p->getName() . "</td>";
                    echo "<td>" . $p->getDescription() . "</td>";
                    echo "<td>" . $p->getPrice() . "</td>";
                    echo "<td>" . $p->getImage() . "</td>";
                    echo "<td>" . $p->getCategory() . "</td>";
                    echo "<td><a href='edit_products.php?id=" . $p->getId() . "' id='editBtn'>Edit</td>";
                    echo "<td><a href='delete_products.php?id=" . $p->getId() . "' id='editBtn'>Delete</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
</table>



<?php include "inc/endLayout.php"; ?>