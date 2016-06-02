<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>Foresite Group<?php if ($PageTitle != "") echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Foresite Group">
    
    <meta name="viewport" content="width=device-width">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="inc/main.css">
    
    <script type="text/javascript" src="inc/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="inc/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="inc/jquery.fittext.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http'], a[href$='.pdf']").not("[href*='" + window.location.host + "']").attr('target','_blank');

        $(window).scroll(function () {
          if ($(this).scrollTop() > 864) {
            $(".menu-sticky").addClass("sticky");
          } else {
            $(".menu-sticky").removeClass("sticky");
          }
        });

        $(".tile-hover-content H2").fitText(0.85, { minFontSize: '12px', maxFontSize: '40px' });
      });
    </script>
  </head>
  <body>

  <div class="banner-home">
    <div class="site-width">
      <div class="banner-home-header">
        <a href="."><img src="images/logo.png" alt="Foresite Group" id="logo"></a>

        <input type="checkbox" id="show-menu" role="button">
        <label for="show-menu" id="menu-toggle"></label>
        <div class="top-menu">
          <?php include "menu.php"; ?>

          <img src="images/waves-white.png" alt="">

          <div class="social">
            <a href="https://www.facebook.com/foresitegrp"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/foresitegrp"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="http://instagram.com/foresitegrp"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://plus.google.com/116904554564513937129"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/company/6387206?trk=tyah&trkInfo=idx%3A1-2-2%2CtarId%3A1424187092082%2Ctas%3AForesite+group"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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
  
  <div class="menu-holder">
    <div class="menu-sticky">
      <div class="site-width menu">
        <a href="."><img src="images/logo-small.png" alt="Foresite Group" id="logo-small"></a>

        <?php include "menu.php"; ?>
      </div>
    </div>
  </div>

  <div class="our-method">
    <div class="site-width">
      <div class="our-method-content">
        <h1>OUR METHOD STARTS BY LISTENING TO YOU.</h1>

        In order to get your message out, you have to spread yourself over a greater variety of ever changing media, which is why we collaborate directly with you to plan a comprehensive and cost effective strategy to tell the story you want told.<br>

        <a href="#" class="button">Learn More</a> <span class="om-featured">FEATURED <i class="fa fa-play fa-rotate-90" aria-hidden="true"></i></span>
      </div>
    </div>
  </div>

  <script src="inc/masonry.pkgd.min.js"></script>
  <div data-masonry='{ "itemSelector": ".tile", "columnWidth": 200, percentPosition: true }'>
    <div class="tile tile2x2" style="background-image: url(images/home-project-teetogreen.jpg);">
      <a href="#" class="tile-link">
        <div class="tile-hover-content">
          <div class="work-title">WORK</div>
          <img src="images/waves-white.png" alt="" class="work-waves">

          <h2>TEE TO GREEN</h2>

          Branding, Print, Design
        </div>
      </a>
    </div>

    <div class="tile tile2x1" style="background-image: url(images/home-project-gossen.jpg);">
      <a href="#" class="tile-link">
        <div class="tile-hover-content">
          <div class="work-title">WORK</div>
          <img src="images/waves-white.png" alt="" class="work-waves">

          <h2>GOSSEN BEAUTY BOOK</h2>

          Design, Print
        </div>
      </a>
    </div>

    <div class="tile" style="background: gray;"><div class="tile-link">BLOG</div></div>

    <div class="tile" style="background: gray;"><div class="tile-link">TWITTER</div></div>

    <div class="tile" style="background-image: url(images/home-project-mortons.jpg);">
      <a href="#" class="tile-link">
        <div class="tile-hover-content">
          <div class="work-title">WORK</div>
          <img src="images/waves-white.png" alt="" class="work-waves">

          <h2>MORTON'S WISCONSINN</h2>

          Branding, Web, Design
        </div>
      </a>
    </div>

    <div class="tile tile1x2" style="background-image: url(images/home-project-belardi.jpg);">
      <a href="#" class="tile-link">
        <div class="tile-hover-content">
          <div class="work-title">WORK</div>
          <img src="images/waves-white.png" alt="" class="work-waves">

          <h2>BELARDI AUTO RACING</h2>

          Website
        </div>
      </a>
    </div>

    <div class="tile" style="background: gray;"><div class="tile-link">TWITTER</div></div>

    <div class="tile" style="background-image: url(images/home-project-fear.jpg);">
      <a href="#" class="tile-link">
        <div class="tile-hover-content">
          <div class="work-title">WORK</div>
          <img src="images/waves-white.png" alt="" class="work-waves">

          <h2>NICOLET FEAR TEAM #4786</h2>

          Website Design
        </div>
      </a>
    </div>

    <div class="tile tile2x1" style="background: green;"><div class="tile-link">SULLIVAN</div></div>
  </div>

  <div class="site-width">
    <h1>Content (H1)</h1>
    
    Bacon ipsum dolor sit amet sausage bacon biltong, salami drumstick hamburger ham hock. Filet mignon ribeye meatball flank tri-tip tongue boudin, doner pig tenderloin. Beef cow turducken pork belly. Corned beef andouille short loin spare ribs. Short ribs frankfurter pig beef ribs. Sausage salami kielbasa cow jowl. Pork ribeye sirloin sausage bacon ham swine turkey biltong tenderloin boudin beef ribs pig hamburger.<br>
    <br>
    
    Pig shankle andouille venison ham frankfurter strip steak ham hock, swine jerky ball tip flank hamburger. Leberkas cow short loin capicola ham hock bresaola. Pig beef ribs salami shankle, ham hock shank flank kielbasa sausage hamburger tenderloin. Salami shankle prosciutto sausage pork chop tri-tip. Short loin shankle tail capicola bresaola chuck drumstick pork belly t-bone shoulder hamburger salami corned beef leberkas meatloaf. Corned beef t-bone drumstick jowl shoulder brisket sirloin meatball turkey.<br>
    <br>
    
    Bacon sirloin jowl tail pork loin corned beef sausage ribeye rump. Pork chop spare ribs turkey andouille strip steak. Venison pig bresaola ground round. Leberkas frankfurter pastrami prosciutto bresaola jowl.<br>
    <br>

    Bacon ipsum dolor sit amet sausage bacon biltong, salami drumstick hamburger ham hock. Filet mignon ribeye meatball flank tri-tip tongue boudin, doner pig tenderloin. Beef cow turducken pork belly. Corned beef andouille short loin spare ribs. Short ribs frankfurter pig beef ribs. Sausage salami kielbasa cow jowl. Pork ribeye sirloin sausage bacon ham swine turkey biltong tenderloin boudin beef ribs pig hamburger.<br>
    <br>
    
    Pig shankle andouille venison ham frankfurter strip steak ham hock, swine jerky ball tip flank hamburger. Leberkas cow short loin capicola ham hock bresaola. Pig beef ribs salami shankle, ham hock shank flank kielbasa sausage hamburger tenderloin. Salami shankle prosciutto sausage pork chop tri-tip. Short loin shankle tail capicola bresaola chuck drumstick pork belly t-bone shoulder hamburger salami corned beef leberkas meatloaf. Corned beef t-bone drumstick jowl shoulder brisket sirloin meatball turkey.<br>
    <br>
    
    Bacon sirloin jowl tail pork loin corned beef sausage ribeye rump. Pork chop spare ribs turkey andouille strip steak. Venison pig bresaola ground round. Leberkas frankfurter pastrami prosciutto bresaola jowl.<br>
    <br>

    Bacon ipsum dolor sit amet sausage bacon biltong, salami drumstick hamburger ham hock. Filet mignon ribeye meatball flank tri-tip tongue boudin, doner pig tenderloin. Beef cow turducken pork belly. Corned beef andouille short loin spare ribs. Short ribs frankfurter pig beef ribs. Sausage salami kielbasa cow jowl. Pork ribeye sirloin sausage bacon ham swine turkey biltong tenderloin boudin beef ribs pig hamburger.<br>
    <br>
    
    Pig shankle andouille venison ham frankfurter strip steak ham hock, swine jerky ball tip flank hamburger. Leberkas cow short loin capicola ham hock bresaola. Pig beef ribs salami shankle, ham hock shank flank kielbasa sausage hamburger tenderloin. Salami shankle prosciutto sausage pork chop tri-tip. Short loin shankle tail capicola bresaola chuck drumstick pork belly t-bone shoulder hamburger salami corned beef leberkas meatloaf. Corned beef t-bone drumstick jowl shoulder brisket sirloin meatball turkey.<br>
    <br>
    
    Bacon sirloin jowl tail pork loin corned beef sausage ribeye rump. Pork chop spare ribs turkey andouille strip steak. Venison pig bresaola ground round. Leberkas frankfurter pastrami prosciutto bresaola jowl.<br>
    <br>

    Bacon ipsum dolor sit amet sausage bacon biltong, salami drumstick hamburger ham hock. Filet mignon ribeye meatball flank tri-tip tongue boudin, doner pig tenderloin. Beef cow turducken pork belly. Corned beef andouille short loin spare ribs. Short ribs frankfurter pig beef ribs. Sausage salami kielbasa cow jowl. Pork ribeye sirloin sausage bacon ham swine turkey biltong tenderloin boudin beef ribs pig hamburger.<br>
    <br>
    
    Pig shankle andouille venison ham frankfurter strip steak ham hock, swine jerky ball tip flank hamburger. Leberkas cow short loin capicola ham hock bresaola. Pig beef ribs salami shankle, ham hock shank flank kielbasa sausage hamburger tenderloin. Salami shankle prosciutto sausage pork chop tri-tip. Short loin shankle tail capicola bresaola chuck drumstick pork belly t-bone shoulder hamburger salami corned beef leberkas meatloaf. Corned beef t-bone drumstick jowl shoulder brisket sirloin meatball turkey.<br>
    <br>
    
    Bacon sirloin jowl tail pork loin corned beef sausage ribeye rump. Pork chop spare ribs turkey andouille strip steak. Venison pig bresaola ground round. Leberkas frankfurter pastrami prosciutto bresaola jowl.
  </div>
  
  <div class="footer">
    Copyright &copy; <?php echo date("Y"); ?> All rights reserved
  </div>
    
  </body>
</html>