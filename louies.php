<?php
$PageTitle = "Louie's Last Regatta";
$Description = "Video";
$Keywords = "foresite group, foresite group llc, milwaukee web design, milwaukee website design, creative agency, website design, marketing agency, social media agency, social media marketing, brand design, brand development, logo design, collateral design, search engine marketing agency, milwaukee, seo, brand development, creative solutions, design, print, video";
$CssInc = "projects.css";
include "header.php";
?>

<div class="louies">
  <div class="project site-width">
    <div class="center">
      <h2>LOUIE'S LAST REGATTA</h2>

      <div class="task">VIDEO</div>

      <i class="fa fa-play fa-rotate-90" aria-hidden="true"></i>
    </div>

    <?php
    include_once "inc/embed-video.php";
    EmbedVideo("https://www.youtube.com/watch?v=QJzoitq-iu0");
    ?>

    <div class="left">
      <span>THE STORY</span>

      <img src="images/louies-circle.png" alt="">
    </div>

    <div class="right">
      Louie's Last Regatta was started in 1999 by a group of Milwaukee sailors who wanted one more sailing regatta before the years end, eventually turning the idea into a charitable event open to all. Currently in its 18th year the event attracts over 100 boats from various locations that have collectively raised over 1 million dollars for donation to Children's Hospital. This remarkable story needed to reach beyond the sailors and participants involved, so we were brought in to create a more meaningful video that reaches beyond the shores of Lake Michigan to bring further awareness to the event and its continued success.<br>
      <br>

      #itsforthekids<br>
      <br>

      <div>Video brought to you in partnership with Take 7 Productions &amp; Foresite Group.</div>
    </div>
  </div>
</div>

<div class="project-nav">
  <div class="site-width">
    <div class="prev">
      <a href="iam.php"><i class="fa fa-play fa-flip-horizontal" aria-hidden="true"></i> PREVIOUS PROJECT</a>
    </div>
    <div class="home"><a href="work.php"><i class="fa fa-th" aria-hidden="true"></i></a></div>
    <div class="next">
      <a href="deviation.php">NEXT PROJECT <i class="fa fa-play" aria-hidden="true"></i></a>
    </div>
  </div>
</div>

<div class="prefooter">
  <h3 class="waves-white"><a href="contact.php">HAVE AN IDEA?</a></h3>
</div>

<?php include "footer.php"; ?>