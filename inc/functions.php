<?php 
    Use admin\models\User;
    include_once "../admin/models/User.php";

?>

<?php
            if(isset($_POST["login"])){
                $user = new User();
                $user->login($_POST['email'],$_POST['password']);

            }

            if(isset($_POST[''])){
                
            }
        ?>