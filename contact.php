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
            <h1 class="h2">03 : Contact me</h1>
          </div>
          
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
               <form action="" class="reveal-content">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="5" placeholder="Enter your message"></textarea>
                      </div>
                      <button type="submit" class="btn btn-default btn-lg">Send</button>
                    </div>
                    <div class="col-md-5 address-container">
                      <ul class="list-unstyled">
                        <li>
                          <span class="fa-icon">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                          </span>
                          <?=getPhone($pro)?>
                        </li>
                        <li>
                          <span class="fa-icon">
                            <i class="fa fa-at" aria-hidden="true"></i>
                          </span>
                          <?=getEmail($pro)?>
                        </li>
                        <li>
                          <span class="fa-icon">
                            <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                          </span>
                          <?=getAddress($pro)?>
                        </li>
                      </ul>
                      <h3>Follow me on social networks</h3>
                      <a href="<?=getFacebook($pro)?>" title="" class="fa-icon">
                        <i class="fa fa-facebook"></i>
                      </a>
                      <a href="<?=getTwitter($pro)?>" title="" class="fa-icon">
                        <i class="fa fa-twitter"></i>
                      </a>
                      <a href="<?=getLinkedin($pro)?>" title="" class="fa-icon">
                        <i class="fa fa-linkedin"></i>
                      </a>

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