<?php
session_start();
    function getAdmin($username, $password){
        
        $query = "SELECT * FROM `admin` WHERE username='$username' OR email='$username';";
        
        include "/AppServ/www/portfolio/database.php";           
        if($connection)
        {
            $user = mysqli_query($connection, $query);
            if(!empty($user))
            {  
                $row = mysqli_fetch_assoc($user);
                // $checkPass = password_verify($password, $row['password']);
                if($password == $row['password']){ 
                    $adminFound = mysqli_num_rows($user);
                    setcookie("uid", $row['id'], time()+3600);
                    $_SESSION['uid'] = $row['id'];
                    $_SESSION['username'] = $row['username'];
                    if($adminFound==0){
                        header("Location: admin.php?status=NotAdmin");
                    }
                    else{                                               
                        header("Location: adminPanel.php?success=loggedIn");                        
                    }                    
                }
                else{
                    
                    header("Location: admin.php?status=wrongPassword");
                    
                }                                        
            }

            else
            {
                header("Location: ../admin.php?status=userDoesNotExist");
            }
        }

        else
        {
            header("Location: ../admin.php?status=connectionFailed");
        }
    }

?>