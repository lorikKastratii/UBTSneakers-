<?php 
    include "inc/layout.php";
    include_once "Models/User.php"; 
    include_once "Models/Role.php"; 
    use Admin\Models\User;
    use Admin\Models\Role;
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
            <input type="text" name="firstname" class="inputField">
        
            <label for="Lastname">Lastname</label>
            <input type="text" name="lastname" class="inputField">

            <label for="Email">Email</label>
            <input type="text" name="email" class="inputField">

            <label for="Password">Password</label>
            <input type="password" name="password" class="inputField">

            <label for="Role">Choose a role:</label>
            <select name="role" class="inputField">
                <option value="0" hidden>Select role</option>
                <?php 
                    $role = new Role();
                    foreach ($role->find_all() as $r){
                        echo "<option value='".$r->getId() . "'>" . $r->getName() . "</option>";
                    }
                ?>
                <!-- <option value="2">Member</option>
                <option value="1">Admin</option> -->
            </select>

            <input type="submit" value="Add" name="add_user" id="addBtn">
        </form>
    </div>



<?php include "inc/endLayout.php" ?>