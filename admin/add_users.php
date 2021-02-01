<?php include "inc/layout.php";include "Models/User.php"; 
    use Admin\Models\User;
?>
<style>
    <?php include "css/add_form.css" ?>
</style>
    <?php 
        if(isset($_POST["add_user"])){
            $user=new User();
            $user->setFirstname($_POST['firstname']);
            $user->setLastname($_POST['lastname']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->setRole((int)$_POST['role']);
            $user->create();
        }
    
    ?>


    <div class="mainContent">
        <h1>Create User</h1>
        <form action="" method="post" id="add_form">
            <label for="Firstname">Firstname</label>
            <input type="text" name="firstname" id="inputField">
        
            <label for="Lastname">Lastname</label>
            <input type="text" name="lastname" id="inputField">

            <label for="Email">Email</label>
            <input type="text" name="email" id="inputField">

            <label for="Password">Password</label>
            <input type="password" name="password" id="inputField">

            <label for="Role">Choose a role:</label>
            <select name="role" id="inputField">
                <option value="2">Member</option>
                <option value="1">Admin</option>
            </select>

            <input type="submit" value="Add" name="add_user" id="addBtn">
        </form>
    </div>



<?php include "inc/endLayout.php" ?>