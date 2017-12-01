<?php
$PageTitle = "Work";
$Description = "";
$Keywords = "";
include "header.php";
?>

<div class="work-header">
  <div class="site-width">
    WHAT KEEPS US BUSY
  </div>
</div>

<div class="controls">
  <input type="radio" name="control" data-filter="all" id="all" checked>
  <label for="all">ALL</label>
  <input type="radio" name="control" data-filter=".web" id="web">
  <label for="web">WEB</label>
  <input type="radio" name="control" data-filter=".branding" id="branding">
  <label for="branding">BRANDING</label>
  <input type="radio" name="control" data-filter=".print" id="print">
  <label for="print">PRINT</label>
  <input type="radio" name="control" data-filter=".video-photo" id="video-photo">
  <label for="video-photo">VIDEO/PHOTO</label>
  <input type="radio" name="control" data-filter=".social-media" id="social-media">
  <label for="social-media">SOCIAL</label>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $(".tile-hover-content H2").fitText(0.85, { minFontSize: '12px', maxFontSize: '40px' });
  });
</script>

<div class="work">
  <div class="tile tile3x1 web" style="background-image: url(images/project-bublr.jpg);">
    <a href="bublr.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>BUBLR BIKES</h2>

        Website Design
      </div>
    </a>
  </div>

  <div class="tile tile3x1 web" style="background-image: url(images/project-usm.jpg);">
    <a href="usm.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>UNIVERSITY SCHOOL OF MILWAUKEE</h2>

        Website Design
      </div>
    </a>
  </div>

  <div class="tile tile3x1 web" style="background-image: url(images/project-lifepro.jpg);">
    <a href="life-productions.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>LIFE PRODUCTIONS, INC.</h2>

        Website Design
      </div>
    </a>
  </div>

  <div class="tile tile3x1 web" style="background-image: url(images/project-kubly.jpg);">
    <a href="kubly.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>CHARLES E. KUBLY FOUNDATION</h2>

        Website Design
      </div>
    </a>
  </div>

  <div class="tile tile3x1 web" style="background-image: url(images/project-pep.jpg);">
    <a href="pep.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>PARK'S EDGE PRESCHOOL</h2>

        Website Design
      </div>
    </a>
  </div>

  <div class="tile tile3x1 web" style="background-image: url(images/project-iam.jpg);">
    <a href="iam.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>INVESTMENT ACCOUNT MANAGER</h2>

        Website Design
      </div>
    </a>
  </div>

  <div class="tile tile3x1 video-photo" style="background-image: url(images/project-louies.jpg);">
    <a href="louies.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>LOUIE'S LAST REGATTA</h2>

        Video
      </div>
    </a>
  </div>

  <div class="tile tile3x1 web" style="background-image: url(images/project-deviation.jpg);">
    <a href="deviation.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>DEVIATION</h2>

        Website / UX / UI
      </div>
    </a>
  </div>

  <div class="tile tile3x1 social-media" style="background-image: url(images/project-suzys.jpg);">
    <a href="suzys.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>SUZY'S CHEESECAKES</h2>

        Social Media
      </div>
    </a>
  </div>

  <div class="tile tile3x1 branding web social-media" style="background-image: url(images/project-chaput.jpg);">
    <a href="chaput.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>CHAPUT LAND SURVEYS</h2>

        Branding / Website / Social Media
      </div>
    </a>
  </div>

  <div class="tile tile3x1 web video-photo" style="background-image: url(images/project-wichman.jpg);">
    <a href="wichman.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>WICHMAN SPORTS MEDICINE</h2>

        Web Design / Photography
      </div>
    </a>
  </div>

  <div class="tile tile3x1 print" style="background-image: url(images/project-gossen-product-guide.jpg);">
    <a href="gossen-product-guide.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>GOSSEN PRODUCT GUIDE</h2>

        Design / Print
      </div>
    </a>
  </div>
  
  <div class="tile tile3x1 branding web print" style="background-image: url(images/project-michael-thomas.jpg);">
    <a href="michael-thomas.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>MICHAEL THOMAS</h2>

        Branding / Website / Print
      </div>
    </a>
  </div>

  <div class="tile tile3x1 branding web print" style="background-image: url(images/project-mcbe.jpg);">
    <a href="milwaukee-craft-beer-exchange.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>MILWAUKEE CRAFT BEER EXCHANGE</h2>

        Branding / Website / Print / Design
      </div>
    </a>
  </div>

  <div class="tile tile3x1 web" style="background-image: url(images/project-belardi.jpg);">
    <a href="belardi.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>BELARDI AUTO RACING</h2>

        Website
      </div>
    </a>
  </div>

  <div class="tile tile3x1 web" style="background-image: url(images/project-kmtooling.jpg);">
    <a href="kmtooling.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>KM TOOLING</h2>

        Website
      </div>
    </a>
  </div>

  <div class="tile tile3x1 branding web" style="background-image: url(images/project-mortons.jpg);">
    <a href="mortons.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>MORTON'S WISCONSINN</h2>

        Branding / Web / Design
      </div>
    </a>
  </div>

  <div class="tile tile3x1 web" style="background-image: url(images/project-fear-square.jpg);">
    <a href="nicolet-fear.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>NICOLET FEAR TEAM #4786</h2>

        Website Design
      </div>
    </a>
  </div>

  <div class="tile tile3x1 web branding video-photo" style="background-image: url(images/project-sullivan.jpg);">
    <a href="sullivan.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>SULLIVAN CORPORATION</h2>

        Website / Branding / Photography
      </div>
    </a>
  </div>

  <div class="tile tile3x1 print video-photo" style="background-image: url(images/project-gossen-railing.jpg);">
    <a href="gossen-railing.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>GOSSEN RAILING INSTALL GUIDE</h2>

        Print / Illustration / Video
      </div>
    </a>
  </div>
  
  <div class="tile tile3x1 web" style="background-image: url(images/project-dominican.jpg);">
    <a href="dominican.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>DOMINICAN HIGH SCHOOL</h2>

        Website
      </div>
    </a>
  </div>

  <div class="tile tile3x1 web" style="background-image: url(images/project-centennial.jpg);">
    <a href="centennial.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>CENTENNIAL</h2>

        Website
      </div>
    </a>
  </div>

  <div class="tile tile3x1 branding web print video-photo" style="background-image: url(images/project-gossen.jpg);">
    <a href="gossen.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>GOSSEN CORP</h2>

        Branding / Website Design / Print / Photography
      </div>
    </a>
  </div>

  <div class="tile tile3x1 web branding social-media" style="background-image: url(images/project-jims-cheese.jpg);">
    <a href="jims-cheese.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>JIM'S CHEESE</h2>

        Website design / Branding / Packaging / Social Media
      </div>
    </a>
  </div>

<!--   <div class="tile tile3x1 web print video-photo" style="background-image: url(images/project-molded-dimensions.jpg);">
    <a href="molded-dimensions.php" class="tile-link">
      <div class="tile-hover-content">
        <h2>MOLDED DIMENSIONS</h2>

        Website Design / Photography
      </div>
    </a>
  </div> -->

  <div style="clear: both;"></div>
</div>

<div class="prefooter-button">
  <a href="capabilities.php" class="button">CAPABILITIES</a>
</div>

<div class="prefooter">
  <h3><a href="contact.php">WORK WITH US</a></h3>
</div>

<script type="text/javascript" src="inc/scrollreveal.min.js"></script>
<script src="inc/mixitup.min.js"></script>
<script type="text/javascript">
  window.sr = ScrollReveal();
  sr.reveal('.tile', { rotate: { x: 0, y: 180, z: 0 }, delay: 100 }, 100);
  // sr.reveal('.prefooter-button', { origin: 'top', duration: 1000 });
  // sr.reveal('.prefooter H3', { rotate: { x: 180, y: 0, z: 0 } });

  var containerEl = document.querySelector('.work');
  var mixer = mixitup(containerEl, {
    selectors: { target: '.tile' },
    animation: { effects: 'fade scale(0.9) rotateY(180deg) stagger(50ms)' }
  });
</script>

<?php include "footer.php"; ?>