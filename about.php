<!DOCTYPE html>
<html lang="en">
<?php
  include "/AppServ/www/portfolio/header.php";
  include "/AppServ/www/portfolio/getProfileData.php";
?>

<div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-container-spacer text-center">
            <h1 class="h2">02 : About me</h1>
          </div>
          
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <h3>Background</h3>
                  <p><?= getBackground($abo) ?></p>
                  <h3>Education</h3>
                  <p><?= getEducation($abo) ?></p>
                  <h3>Skills</h3>
                  <ul>
                    <?php 
                      foreach (getSkills($connection) as $item) {
                    ?>
                    <li><?= $item["skill"] ?></li>                    
                    <?php } ?>
                  </ul>
                </div>
                <div class="col-xs-12 col-md-6">
                  <img src="./assets/images/profil.jpg" class="img-responsive" alt="">
                </div>
              </div>
            </div>
          </div>
          
          
       </div>
       <br>
       <br>
       <p><a href="<?= getGithub($pro) ?>" class="btn btn-primary btn-lg">GitHub</a></p>
      </div>
    </div>
  </div>

  <?php include "/AppServ/www/portfolio/footer.php" ?>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
     navActivePage();
  });
</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID 

<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
  ga('create', 'UA-XXXXX-X', 'auto');
  ga('send', 'pageview');
</script>

--> <script type="text/javascript" src="./main.70a66962.js"></script></body>

</html>