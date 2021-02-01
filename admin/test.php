<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    if(isset($_POST['add_user'])){
        $str = (int)$_POST['cars'];
        echo $str;
    }
?>
    <form action="" method="post">

        <label for="Role">Choose a role:</label>
            <select name="cars" id="inputField">
                <option value="2">Member</option>
                <option value="1">Admin</option>
            </select>

            <input type="submit" value="Add" name="add_user" id="addBtn">

    </form>

</body>
</html>