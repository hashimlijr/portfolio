<!DOCTYPE html>
<html lang="en">

<?php
  include "/AppServ/www/portfolio/getProfileData.php";
  session_start();
  if(isset($_SESSION['uid'])){
    header("Location: index.php?status=AlreadyLoggedIn");
  }  
?>
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">

  <title>Admin</title>  

<link href="./main.3f6952e4.css" rel="stylesheet"></head>

<body class="minimal">
<div id="site-border-left"></div>
<div id="site-border-right"></div>
<div id="site-border-top"></div>
<div id="site-border-bottom"></div>

<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-container-spacer text-center">
            <h1 class="h2">Login</h1>
          </div>
          
          <?php if (isset($_GET['status'])) {  ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                    switch ($_GET['status']) {
                        case 'loginFailed':
                            echo 'Something went wrong while registering.';
                            break;
                        case 'NotAdmin':
                            echo 'This user is not admin.';
                            break;
                        case 'emptyInput':
                            echo 'Fill all the fields.';
                            break;
                        case 'wrongPassword':
                            echo 'Invalid password. Please try again.';
                            break;
                        case 'userDoesNotExist':
                            echo 'Invalid username or email. Please try again.';
                            break;
                        case 'connectionFailed':
                            echo 'Oops, something went wrong while connecting to the server. Please try again :(';
                            break;
                        default:
                            echo 'Oops, something went wrong. Please try again :(';
                            break;
                    }
                    ?>
                </div>

            <?php } ?>

            <?php if (isset($_GET['success'])) {  ?>
                <div class="alert alert-success" role="alert">
                    <?php
                    switch ($_GET['success']) {
                        case 'passwordResetedSuccessfully':
                            echo 'Password reset successfully.';
                            break;
                        default:
                            echo 'Oops, something went wrong. Please try again :(';
                            break;
                    }
                    ?>
                </div>

            <?php } ?>

          <div class="row">
            <div class="col-md-10 col-md-offset-1">
               <form action="doAdminLogin.php" autocomplete="off" class="reveal-content" method="POST">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="form-group">
                        <input type="text" class="form-control" id="email" name="username" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-default btn-lg" name="submit">Sign in</button>
                    </div>
                  </div>
                </form>
            </div>

          </div>
         
       </div>
      </div>
    </div>
  </div>


<?php include "/AppServ/www/portfolio/footer.php" ?>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     navActivePage();
  });
</script>

 <script type="text/javascript" src="./main.70a66962.js"></script></body>

</html>