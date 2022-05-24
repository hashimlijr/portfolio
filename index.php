<!DOCTYPE html>
<html lang="en">
<?php
include "/AppServ/www/portfolio/header.php";
include "/AppServ/www/portfolio/getProfileData.php";
?>

<!-- Add your site or app content here -->
  <div class="hero-full-container background-image-container white-text-container" style="background-image: url('./assets/images/space.jpg')">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="hero-full-wrapper">
            <div class="text-content">
              <h1>Hello,<br>
                <span id="typed-strings">
                  <span>I'm <?= getName($pro) . " " . getSurname($pro) ?></span>
                  <span>from <?= getNationality($pro) ?></span>
                  <span><?= getSlogan($pro) ?></span>
                </span>
                <span id="typed"></span>
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     type();
     movingBackgroundImage();
  });
</script>


<script type="text/javascript" src="./main.70a66962.js"></script></body>

</html>