<?php
session_start();
if (!isset($TopDir)) $TopDir = "";

function email($address, $name="") {
  $email = "";
  for ($i = 0; $i < strlen($address); $i++) { $email .= (rand(0, 1) == 0) ? "&#" . ord(substr($address, $i)) . ";" : substr($address, $i, 1); }
  if ($name == "") $name = $email;
  echo "<a href=\"&#109;&#97;&#105;&#108;&#116;&#111;&#58;$email\">$name</a>";
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Foresite Group<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $TopDir; ?>images/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $TopDir; ?>images/apple-touch-icon.png">

    <meta name="description" content="<?php if (isset($Description)) echo $Description; ?>">
    <meta name="keywords" content="<?php if (isset($Keywords)) echo $Keywords; ?>">
    <meta name="author" content="Foresite Group">
    <?php if (isset($BlogInc)) echo $BlogInc; ?>

    <meta name="viewport" content="width=device-width">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $TopDir; ?>inc/main.css?<?php echo filemtime(realpath(dirname(__FILE__)) . "/inc/main.css"); ?>">
    <?php if (isset($CssInc)) echo "<link rel=\"stylesheet\" href=\"inc/" . $CssInc . "?" . filemtime(realpath(dirname(__FILE__)) . "/inc/" . $CssInc) . "\">" ?>

    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/jquery.fittext.js"></script>
    <script type="text/javascript" src="<?php echo $TopDir; ?>inc/fastclick.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $(function() { FastClick.attach(document.body); });

        $(".menu-holder").waypoint(function(direction) {
          $(".menu-sticky").toggleClass("sticky", direction == "down");
        });
      });
    </script>
    <script type="text/javascript">
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-60289306-1', 'auto');
        ga('send', 'pageview');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-G5JCVM4PBB"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-G5JCVM4PBB');
    </script>
  </head>
  <body>

  <div class="banner-home<?php if ($PageTitle != "") echo " subpage"; ?>">
    <div class="site-width">
      <div class="banner-home-header">
        <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo.png" alt="Foresite Group" id="logo"></a>

        <input type="checkbox" id="show-menu" role="button">
        <label for="show-menu" id="menu-toggle"></label>
        <div class="top-menu-wrap">
          <div class="top-menu">
            <?php include "menu.php"; ?>
            
            <div class="social">
              <a href="http://instagram.com/foresitegrp"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              <a href="https://facebook.com/foresitegrp"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <a href="https://twitter.com/foresitegrp"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="https://vimeo.com/foresite"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
              <a href="https://linkedin.com/company/6387206"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="banner-home-content site-width">
        <div class="banner-home-text">
          <h1>AN <span style="color: #69C9CA;">INDEPENDENT DIGITAL AGENCY</span> BREWING IDEAS, CRAFTING SOLUTIONS.</h1>

          <i class="fa fa-play fa-rotate-90" aria-hidden="true"></i> &nbsp; VIEW LATEST
        </div>
      </div>
    </div>
  </div>

  <div class="menu-holder<?php if ($PageTitle != "") echo " subpage"; ?>">
    <div class="menu-sticky<?php if ($PageTitle != "") echo " sticky"; if (isset($Menu)) echo " menu-light"; ?>">
      <div class="site-width menu">
        <a href="<?php echo $TopDir; ?>."><img src="<?php echo $TopDir; ?>images/logo-small<?php if (isset($Menu)) echo "-light"; ?>.png" alt="Foresite Group" id="logo-small"></a>

        <?php include "menu.php"; ?>
      </div>
    </div>
  </div>
