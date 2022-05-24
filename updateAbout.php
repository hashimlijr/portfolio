<?php
include "/AppServ/www/portfolio/database.php";

if(!$connection){
    header("Location: adminPanel.php?error=connactionFailed");
}
if(isset($_POST['background']) && isset($_POST['education'])){
        $background = mysqli_real_escape_string($connection, $_POST["background"]);
        $education = mysqli_real_escape_string($connection, $_POST["education"]);

        $queryForUpdate = "UPDATE `about` SET `background`='background',`education`='education' WHERE `id` = 1";

        $updated = mysqli_query($connection, $queryForUpdate);  
        header("Location: adminPanel.php?success=aboutUpdated");
}
else{
    header("Location: adminPanel.php?status=CouldNotUpdated");
}
?>