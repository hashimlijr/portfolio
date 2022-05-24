<?php
include "/AppServ/www/portfolio/database.php";

if(!$connection){
    header("Location: adminPanel.php?error=connactionFailed");
}
if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['username']) && isset($_POST['email'])){
        $name = mysqli_real_escape_string($connection, $_POST["name"]);
        $surname = mysqli_real_escape_string($connection, $_POST["surname"]);
        $username = mysqli_real_escape_string($connection, $_POST["username"]);
        $email = mysqli_real_escape_string($connection, $_POST["email"]);
        $phone = mysqli_real_escape_string($connection, $_POST["phone"]);
        $address = mysqli_real_escape_string($connection, $_POST["address"]);
        $nationality = mysqli_real_escape_string($connection, $_POST["nationality"]);
        $facebook = mysqli_real_escape_string($connection, $_POST["facebook"]);
        $twitter = mysqli_real_escape_string($connection, $_POST["twitter"]);
        $linkedin = mysqli_real_escape_string($connection, $_POST["linkedin"]);
        $github = mysqli_real_escape_string($connection, $_POST["github"]);
        $slogan = mysqli_real_escape_string($connection, $_POST["slogan"]);

        $queryForUpdate = "UPDATE `info` SET `name`='$name',`surname`='$surname',`username`='$username',`phone`='$phone',`email`='$email',`address`='$address',`facebook`='$facebook',`twitter`='$twitter',`linkedin`='$linkedin',`github`='$github',`nationality`='$nationality',`slogan`='$slogan' WHERE `id` = 1";

        $updated = mysqli_query($connection, $queryForUpdate);  
        header("Location: adminPanel.php?success=bioUpdated");
}
else{
    header("Location: adminPanel.php?status=CouldNotUpdated");
}
?>