<?php include_once "inc/layout.php"; include_once "Models/User.php"; use Admin\Models\User; ?>

<style>
    <?php include "css/delete_form.css" ?>
</style>

<?php 
        $user=new User();
        if(isset($_GET['id'])){
        $user=$user->find_id($_GET['id']);

        if(isset($_POST['delete_user'])){
            $user->delete();
        }
    }
?>


<div class="mainContent">
        <h1>Delete User</h1>
        <form action="" method="post" id="delete_form">
            <label for="Firstname">Firstname</label>
            <input type="text" name="firstname" id="inputField" disabled value=<?php echo $user->getFirstname()?>>
        
            <label for="Lastname">Lastname</label>
            <input type="text" name="lastname" id="inputField" disabled value=<?php echo $user->getLastname()?>>

            <label for="Email">Email</label>
            <input type="text" name="email" id="inputField" disabled value=<?php echo $user->getEmail()?>>

            <label for="Role">Role</label>
            <input type="text" name="role" id="inputField" disabled value=<?php echo $user->getRoleName()?>>

            <input type="submit" value="Delete" name="delete_user" id="deleteBtn">
        </form>
    </div>









<?php include_once "inc/endLayout.php" ?>