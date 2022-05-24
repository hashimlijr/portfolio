<?php
include "/AppServ/www/portfolio/database.php";

$pass = $_POST['password'];
$hashed_password = password_hash($pass, PASSWORD_DEFAULT);

$queryCreate = "INSERT INTO `admin`(`id`, `name`, `surname`, `username`, `email`, `password`) VALUES (1,'Sahil','Hashimli','hahimlijr','hashimlisahil@gmail.com','$hashed_password')";

$registeredUser = mysqli_query($connection, $queryCreate);
?>