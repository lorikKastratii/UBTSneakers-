<?php include_once "inc/layout.php"; include_once "Models/User.php"; use Admin\Models\User; ?>

<style>
    <?php include "css/edit_form.css" ?>
</style>

<?php 
        $user=new User();
        if(isset($_GET['id'])){
        $user=$user->find_id($_GET['id']);

        if(isset($_POST['edit_user'])){
            $user->setFirstname($_POST['firstname']);
            $user->setLastname($_POST['lastname']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->setRole((int)$_POST['role']);
            $user->update();
        }
    }
?>


<div class="mainContent">
        <h1>Update User</h1>
        <form action="" method="post" id="edit_form">
            <label for="Firstname">Firstname</label>
            <input type="text" name="firstname" id="inputField" value=<?php echo $user->getFirstname()?>>
        
            <label for="Lastname">Lastname</label>
            <input type="text" name="lastname" id="inputField" value=<?php echo $user->getLastname()?>>

            <label for="Email">Email</label>
            <input type="text" name="email" id="inputField" value=<?php echo $user->getEmail()?>>

            <label for="Password">Password</label>
            <input type="password" name="password" id="inputField" value=<?php echo $user->getPassword()?>>

            <label for="Role">Choose a role:</label>
            <select name="role" id="inputField">
                <option value="2">Member</option>
                <option value="1">Admin</option>
            </select>

            <input type="submit" value="Edit" name="edit_user" id="editBtn"
             <?php if(isset($_SESSION['user'])){
                 if($_SESSION['user']['role'] == 2){
                     echo "disabled style='background-color:red;'";
                 }
             } 
            ?>>
        </form>
    </div>








<?php include_once "inc/endLayout.php" ?>