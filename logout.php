<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    session_start();
    session_unset();
    session_destroy();
    header("Location: index.php?status=LoggedOut");
}
else{
    header("Location: index.php?status=CouldNotLoggedOut");
}
?>