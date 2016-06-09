<?php
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
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <meta name="description" content="<?php if ($Description != "") echo $Description; ?>">
    <meta name="keywords" content="<?php if ($Keywords != "") echo $Keywords; ?>">
    <meta name="author" content="Foresite Group">
    
    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css">
    
    <script type="text/javascript" src="inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="inc/jquery.fittext.js"></script>
    <script type="text/javascript" src="inc/fastclick.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

        $(function() { FastClick.attach(document.body); });

        $(window).scroll(function () {
          if ($(this).scrollTop() > 864) {
            $(".menu-sticky").addClass("sticky");
          } else {
            $(".menu-sticky").removeClass("sticky");
          }

          if ($(this).scrollTop() > 0) {
            $(".menu-holder.subpage .menu-sticky").addClass("sticky");
          } else {
            $(".menu-holder.subpage .menu-sticky").removeClass("sticky");
          }
        });

        $(".tile-hover-content H2").fitText(0.85, { minFontSize: '12px', maxFontSize: '40px' });
      });
    </script>
  </head>
  <body>

  <div class="banner-home<?php if ($PageTitle != "") echo " subpage"; ?>">
    <div class="site-width">
      <div class="banner-home-header">
        <a href="."><img src="images/logo.png" alt="Foresite Group" id="logo"></a>

        <input type="checkbox" id="show-menu" role="button">
        <label for="show-menu" id="menu-toggle"></label>
        <div class="top-menu">
          <?php include "menu.php"; ?>

          <img src="images/waves-white.png" alt="">

          <div class="social">
            <a href="https://facebook.com/foresitegrp"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/foresitegrp"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="http://instagram.com/foresitegrp"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://plus.google.com/116904554564513937129"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href="https://linkedin.com/company/6387206"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>

      <div class="banner-home-content">
        <div class="banner-home-text">
          <h1>Brewing <span style="color: #FFFFFF;">Ideas</span>, Crafting Solutions.</h1>

          A full service creative company located in Walkers Point, Milwaukee.<br>
          <br>

          <i class="fa fa-play fa-rotate-90" aria-hidden="true"></i>
        </div>
      </div>
    </div>
  </div>
  
  <div class="menu-holder<?php if ($PageTitle != "") echo " subpage"; ?>">
    <div class="menu-sticky<?php if (isset($Menu)) echo " menu-light"; ?>">
      <div class="site-width menu">
        <a href="."><img src="images/logo-small<?php if (isset($Menu)) echo "-light"; ?>.png" alt="Foresite Group" id="logo-small"></a>

        <?php include "menu.php"; ?>
      </div>
    </div>
  </div>
