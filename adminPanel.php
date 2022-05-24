<!DOCTYPE html>
<html>

<?php
include "/AppServ/www/portfolio/getProfileData.php";
session_start();
if(!isset($_SESSION['uid'])){
    header("Location: index.php?status=NotLoggedIn");
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

  <title>Admin Panel</title>  

<link href="./main.3f6952e4.css" rel="stylesheet"></head>

<body class="minimal">
<div id="site-border-left"></div>
<div id="site-border-right"></div>
<div id="site-border-top"></div>
<div id="site-border-bottom"></div>
<!-- Add your content of header -->
<header>
  <nav class="navbar  navbar-fixed-top navbar-inverse">
    <div class="container">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav ">
          <li>
          <form method="POST" action="logout.php">
                  <button class="btn btn-primary btn-sm" type="submit">00 : Logout</button>
            </form>
          </li>
        </ul>
        </div>
      </div> 
    </div>
  </nav>
</header>
<body>
<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-container-spacer text-center">
            <h1 class="h2">Admin panel</h1>
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
                        case 'CouldNotUpdated':
                            echo 'Oops, something went wrong while updating data. Please try again :(';
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
                        case 'loggedIn':
                            echo 'Welcome, boss. Good to see you!';
                            break;
                        case 'bioUpdated':
                            echo 'Bio section was updated successfully.';
                            break;
                        case 'aboutUpdated':
                            echo 'About section was updated successfully.';
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
              <form action="updateBio.php" method="POST" class="reveal-content">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h2>Bio</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="<?= getName($pro) ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="surname" placeholder="Surname" value="<?= getSurname($pro) ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email" value="<?= getEmail($pro) ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="username" placeholder="Username" value="<?= getUsername($pro) ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?= getPhone($pro) ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address" value="<?= getAddress($pro) ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nationality" placeholder="Nationality" value="<?= getNationality($pro) ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="facebook" placeholder="Facebook" value="<?= getFacebook($pro) ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="twitter" placeholder="Twitter" value="<?= getTwitter($pro) ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn" value="<?= getLinkedin($pro) ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="github" placeholder="GitHub" value="<?= getGithub($pro) ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="slogan" placeholder="Slogan" value="<?= getSlogan($pro) ?>">
                    </div>

                    <button type="submit" class="btn btn-default btn-lg">Update</button>

                </div>
              </div>
              </form>
              <br>
              <br>

              <form action="updateAbout.php" method="POST" class="reveal-content">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h2>About</h2>
                    <div class="form-group">
                        <input type="text" class="form-control" name="background" placeholder="Background" value="<?= getBackground($abo) ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="education" placeholder="Education" value="<?= getEducation($abo) ?>">
                    </div>
                  
                    <button type="submit" class="btn btn-default btn-lg">Update</button>

                </div>
              </div>
              </form>

            </div>
          </div>
          
          
       </div>
      </div>
    </div>
  </div>
</body>
</html>