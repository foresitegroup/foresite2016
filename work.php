<?php
$PageTitle = "Work";
$Description = "";
$Keywords = "";
$Menu = "light";
include "header.php";
?>

<script src="inc/masonry.pkgd.min.js"></script>
<div data-masonry='{ "itemSelector": ".tile", "columnWidth": 200, percentPosition: true }'>
  <div class="tile tile2x2" style="background-image: url(images/project-teetogreen.jpg);">
    <a href="#" class="tile-link">
      <div class="tile-hover-content">
        <div class="work-title">WORK</div>
        <img src="images/waves-white.png" alt="" class="work-waves">

        <h2>TEE TO GREEN</h2>

        Branding, Print, Design
      </div>
    </a>
  </div>

  <div class="tile tile2x1" style="background-image: url(images/project-gossen.jpg);">
    <a href="#" class="tile-link">
      <div class="tile-hover-content">
        <div class="work-title">WORK</div>
        <img src="images/waves-white.png" alt="" class="work-waves">

        <h2>GOSSEN BEAUTY BOOK</h2>

        Design, Print
      </div>
    </a>
  </div>

  <div class="tile" style="background-image: url(images/project-michael-thomas.jpg);">
    <a href="#" class="tile-link">
      <div class="tile-hover-content">
        <div class="work-title">WORK</div>
        <img src="images/waves-white.png" alt="" class="work-waves">

        <h2>MICHAEL THOMAS</h2>

        Branding, Website, Print
      </div>
    </a>
  </div>
  
  <div class="tile" style="background-image: url(images/project-mortons.jpg);">
    <a href="#" class="tile-link">
      <div class="tile-hover-content">
        <div class="work-title">WORK</div>
        <img src="images/waves-white.png" alt="" class="work-waves">

        <h2>MORTON'S WISCONSINN</h2>

        Branding, Web, Design
      </div>
    </a>
  </div>

  <div class="tile" style="background-image: url(images/project-mcbe.jpg);">
    <a href="#" class="tile-link">
      <div class="tile-hover-content">
        <div class="work-title">WORK</div>
        <img src="images/waves-white.png" alt="" class="work-waves">

        <h2>MILWAUKEE CRAFT BEER EXCHANGE</h2>

        Branding, Website, Print, Design
      </div>
    </a>
  </div>

  <div class="tile tile1x2" style="background-image: url(images/project-belardi.jpg);">
    <a href="#" class="tile-link">
      <div class="tile-hover-content">
        <div class="work-title">WORK</div>
        <img src="images/waves-white.png" alt="" class="work-waves">

        <h2>BELARDI AUTO RACING</h2>

        Website
      </div>
    </a>
  </div>

  <div class="tile" style="background-image: url(images/project-kmtooling.jpg);">
    <a href="#" class="tile-link">
      <div class="tile-hover-content">
        <div class="work-title">WORK</div>
        <img src="images/waves-white.png" alt="" class="work-waves">

        <h2>KM TOOLING</h2>

        Website
      </div>
    </a>
  </div>

  <div class="tile" style="background-image: url(images/project-fear.jpg);">
    <a href="#" class="tile-link">
      <div class="tile-hover-content">
        <div class="work-title">WORK</div>
        <img src="images/waves-white.png" alt="" class="work-waves">

        <h2>NICOLET FEAR TEAM #4786</h2>

        Website Design
      </div>
    </a>
  </div>

  <div class="tile tile2x1" style="background-image: url(images/project-sullivan.jpg);">
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
  <a href="capabilities.php" class="button">CAPABILITIES</a>
</div>

<div class="prefooter">
  <h3 class="waves-white">WORK WITH US</h3>
</div>

<script type="text/javascript" src="inc/scrollreveal.min.js"></script>
<script type="text/javascript">
  window.sr = ScrollReveal();
  sr.reveal('.tile', { rotate: { x: 0, y: 180, z: 0 }, delay: 100 }, 100);
  sr.reveal('.prefooter-button', { origin: 'top', duration: 1000 });
  sr.reveal('.prefooter H3', { rotate: { x: 180, y: 0, z: 0 } });
</script>

<?php include "footer.php"; ?>