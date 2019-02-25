<?php
$PageTitle = "";
$Description = "Milwaukee Website Design Firm - Foresite Group, LLC. Brewing Ideas, Crafting Solutions.";
$Keywords = "foresite group, foresite group llc, milwaukee web design, milwaukee website design, creative agency, website design, marketing agency, social media agency, social media marketing, brand design, brand development, logo design, collateral design, search engine marketing agency, milwaukee, seo, brand development, creative solutions, forsite group, foresite group llc, foresite group milwaukee, milwaukee, milwaukee web design, milwaukee creative agency, brand design, brand development, social media marketing, collateral design, search engine optimization, marketing, marketing strategy, website design, we build websites, website development, website company in milwaukee, logo design, logo design company, content marketing, responsive website design, creative website design, milwaukee website design";
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

<script type="text/javascript">
  $(document).ready(function() {
    $(".tile-hover-content H2").fitText(0.85, { minFontSize: '12px', maxFontSize: '40px' });
  });
</script>
<script src="inc/masonry.pkgd.min.js"></script>

<div data-masonry='{ "itemSelector": ".tile", "columnWidth": 200, percentPosition: true }'>
  <div class="tile tile2x2" style="background-image: url(images/project-wpf.jpg);">
    <a href="wpf.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>WISCONSIN POLICY FORUM</h2>

        Website Design
      </div>
    </a>
  </div>

  <div class="tile tile2x1" style="background-image: url(images/project-edh.jpg);">
    <a href="edh.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>EVERY DAY HOPE</h2>

        Website Design
      </div>
    </a>
  </div>

  <?php
  require('news/wp-blog-header.php');
  $posts = get_posts('posts_per_page=1&order=DESC&orderby=date');
  foreach ($posts as $post) :
    setup_postdata( $post );
    ?>
    <div class="tile blog"<?php if (get_post_thumbnail_id() != "") echo ' style="background-image: url(' . wp_get_attachment_url(get_post_thumbnail_id()) . ');"'; ?>>
      <div class="tile-content">
        <div class="blog-date"><?php the_date(); ?></div>
        <div class="blog-title"><?php the_title(); ?></div>
        <div class="blog-footer">NEWS</div>
      </div>
      <a href="<?php the_permalink(); ?>" class="tile-link"><div class="tile-hover-content">READ <i class="fa fa-play" aria-hidden="true"></i></div></a>
    </div>
  <?php endforeach; ?>

   <div class="tile" style="background-image: url(images/project-bublr.jpg);">
    <a href="bublr.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>BUBLR BIKES</h2>

        Website Design
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
      <a href="<?php echo $tweet_date_link; ?>" class="twitter-date"><?php echo $tweet_date; ?></a>

      <?php echo $tweet_text; ?>

      <div class="twitter-footer">
        <a href="http://twitter.com/foresitegrp">@foresitegrp</a>

        <i class="fa fa-twitter" aria-hidden="true"></i>
      </div>
    </div>
  </div>

  <div class="tile tile1x2" style="background-image: url(images/project-usm.jpg);">
    <a href="usm.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>UNIVERSITY SCHOOL OF MILWAUKEE</h2>

        Website Design
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
      <a href="<?php echo $tweet_date_link; ?>" class="twitter-date"><?php echo $tweet_date; ?></a>

      <?php echo $tweet_text; ?>

      <div class="twitter-footer">
        <a href="http://twitter.com/foresitegrp">@foresitegrp</a>

        <i class="fa fa-twitter" aria-hidden="true"></i>
      </div>
    </div>
  </div>

  <div class="tile" style="background-image: url(images/project-lifepro.jpg);">
    <a href="life-productions.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>LIFE PRODUCTIONS, INC.</h2>

        Website Design
      </div>
    </a>
  </div>

  <div class="tile tile2x1" style="background-image: url(images/project-louies.jpg);">
    <a href="louies.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>LOUIE'S LAST REGATTA</h2>

        Video
      </div>
    </a>
  </div>

  <div style="clear: both;"></div>
</div>

<div class="prefooter-button">
  <a href="work.php" class="button">SHOW MORE</a>
</div>

<div class="prefooter">
  <h3><a href="contact.php">LET'S CREATE SOMETHING</a></h3>
</div>

<script type="text/javascript" src="inc/scrollreveal.min.js"></script>
<script type="text/javascript">
  window.sr = ScrollReveal();
  sr.reveal('.capabilities-banner-content', { origin: 'bottom' });
  sr.reveal('.tile', { rotate: { x: 0, y: 180, z: 0 }, delay: 100 }, 100);
  sr.reveal('.prefooter-button', { origin: 'top', duration: 1000 });
  sr.reveal('.prefooter H3', { rotate: { x: 180, y: 0, z: 0 } });
</script>

<?php include "footer.php"; ?>