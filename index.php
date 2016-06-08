<?php
$PageTitle = "";
$Description = "";
$Keywords = "";
include "header.php";
?>

<div class="capabilities-banner">
  <div class="site-width">
    <div class="capabilities-banner-content">
      <h1>OUR METHOD STARTS BY LISTENING TO YOU.</h1>

      In order to get your message out, you have to spread yourself over a greater variety of ever changing media, which is why we collaborate directly with you to plan a comprehensive and cost effective strategy to tell the story you want told.<br>

      <a href="capabilities.php" class="button">Learn More</a> <span class="cb-featured">FEATURED <i class="fa fa-play fa-rotate-90" aria-hidden="true"></i></span>
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

  <div class="tile blog" style="background-image: url(images/home-blog.jpg);">
    <div class="tile-content">
      <div class="blog-title">March 23, 2016</div>

      5 Phrases You've Probably Been Saying Incorrectly

      <div class="blog-footer">NEWS</div>
    </div>
    <a href="#" class="tile-link"><div class="tile-hover-content">READ <i class="fa fa-play" aria-hidden="true"></i></div></a>
  </div>
  
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

  <div class="tile twitter">
    <div class="tile-link">
      <?php
      require_once("TweetPHP/stuff.php");
      $tweet_date_link = "https://twitter.com/foresitegrp/status/" . $tweet_array[0]['id'];
      $tweet_date = date("F j, Y", strtotime($tweet_array[0]['created_at']));
      $tweet_text = $TweetPHP->autolink($tweet_array[0]['text']);
      ?>
      <a href="<?php echo $tweet_date_link; ?>" class="twitter-date"><?php echo $tweet_date; ?></a><br>
      <br>

      <?php echo $tweet_text; ?>

      <div class="twitter-footer">
        <a href="http://twitter.com/foresitegrp">@foresitegrp</a>

        <i class="fa fa-twitter" aria-hidden="true"></i>
      </div>
    </div>
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

  <div class="tile twitter">
    <div class="tile-link">
      <?php
      $tweet_date_link = "https://twitter.com/foresitegrp/status/" . $tweet_array[1]['id'];
      $tweet_date = date("F j, Y", strtotime($tweet_array[1]['created_at']));
      $tweet_text = $TweetPHP->autolink($tweet_array[1]['text']);
      ?>
      <a href="<?php echo $tweet_date_link; ?>" class="twitter-date"><?php echo $tweet_date; ?></a><br>
      <br>

      <?php echo $tweet_text; ?>

      <div class="twitter-footer">
        <a href="http://twitter.com/foresitegrp">@foresitegrp</a>

        <i class="fa fa-twitter" aria-hidden="true"></i>
      </div>
    </div>
  </div>

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

  <div class="tile tile2x1" style="background-image: url(images/home-project-sullivan.jpg);">
    <a href="#" class="tile-link">
      <div class="tile-hover-content">
        <div class="work-title">WORK</div>
        <img src="images/waves-white.png" alt="" class="work-waves">

        <h2>SULLIVAN CORPORATION</h2>

        Website, Branding, Photography
      </div>
    </a>
  </div>

  <div style="clear: both;"></div>
</div>

<div class="prefooter-button">
  <a href="work.php" class="button">OUR WORK</a>
</div>

<div class="prefooter">
  <h3 class="waves-white">WORK WITH US</h3>
</div>

<script type="text/javascript" src="inc/scrollreveal.min.js"></script>
<script type="text/javascript">
  window.sr = ScrollReveal();
  sr.reveal('.capabilities-banner-content', { rotate: { x: 0, y: 0, z: 180 } });
  sr.reveal('.our-method-content', { origin: 'left' });
  sr.reveal('.tile', { rotate: { x: 0, y: 180, z: 0 }, delay: 100 }, 100);
  sr.reveal('.prefooter-button', { origin: 'top', duration: 1000 });
  sr.reveal('.prefooter H3', { rotate: { x: 180, y: 0, z: 0 } });
</script>

<?php include "footer.php"; ?>