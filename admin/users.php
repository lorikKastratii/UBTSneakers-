<?php 
    use Admin\Models\User;
    include_once "inc/layout.php"; 
    include_once "models/user.php";
?>
<style>
    <?php include "css/users.css"; ?>
</style>




<table class="styled-table">
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $user = new User();
            foreach($user->find_all() as $u){
                echo "<tr>";
                    echo "<td>" . $u->getFirstname() . "</td>";
                    echo "<td>" . $u->getLastname() . "</td>";
                    echo "<td>" . $u->getEmail() . "</td>";
                    echo "<td>" . $u->getRoleName() . "</td>";
                    echo "<td><a href='edit_user.php?id=" . $u->getId() . "' id='editBtn'>Edit</td>";
                    echo "<td><a href='delete_user.php?id=" . $u->getId() . "' id='editBtn'>Delete</td>";
                echo "</tr>";
            }
        ?>
    </tbody>
    <thead>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
</table>



<?php include "inc/endLayout.php"; ?>