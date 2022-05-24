<?php
if ($_SERVER['REQUEST_METHOD'] === "POST"){
    if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["submit"]))
    {
        include "/AppServ/www/portfolio/database.php";        
        if(!$connection){
            header("Location: ../register.php?status=connectionFailed");
        }

        $username = mysqli_real_escape_string($connection, $_POST["username"]);  
        $password = mysqli_real_escape_string($connection, $_POST["password"]);


        include "/AppServ/www/portfolio/adminLoginController.php";


        $login = new adminLoginController($username, $password);

        $login->loginAdmin();

    }
    else{
        header("Location: admin.php?status=loginFailed");
    }
}

?>