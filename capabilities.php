<?php
$PageTitle = "Capabilities";
$Description = "";
$Keywords = "";
include "header.php";
?>

<div class="capabilities-banner">
  <div class="site-width">
    <div class="capabilities-banner-content">
      <h1>WE'RE NOT A COOKIE CUTTER FIRM...</h1>
      
      <h3>So we won't provide cookie cutter solutions.</h3>
      
      We recognize that every business has their own needs within their respected industries. As a team we take the time to listen, understand the area of experiese, guide and work directly with our clients through a process unique to their story.<br>
      
      <div class="cb-capabilities">CAPABILITIES <i class="fa fa-play fa-rotate-90" aria-hidden="true"></i></div>
    </div>
  </div>
</div>

<div class="capabilities site-width">
  <div>BRAND STRATEGY</div>
  <div>RESEARCH</div>
  <div>DEVELOPMENT</div>
  <div>WEB + MOBILE</div>
  <div>UI/UX</div>
  
  <div>INTERACTIVE DESIGN</div>
  <div>CREATIVE</div>
  <div>ILLUSTRATION</div>
  <div>PHOTOGRAPHY</div>
  <div>MEDIA</div>
  
  <div>SOCIAL MEDIA</div>
  <div>CONTENT STRATEGY</div>
  <div>CONSULTING</div>
  <div>MARKETING</div>
  <div>MOTION</div>
</div>

<div class="our-method">
  <div class="site-width">
    <h2>OUR METHOD</h2>
    
    <img src="images/our-method-deliver.png" alt="">
    <div>
      <h3>DELIVER</h3>
      We surpass the classic, "Discover, Design, Develop &amp; Deliver" tagline with real relevant research because you're not just another number to us. We take what we learn and implement that into design and development with a purpose.
    </div>
    
    <span></span>
    
    <img src="images/our-method-strategize.png" alt="">
    <div>
      <h3>STRATEGIZE</h3>
      You don't want your new design to sink like a stone, which is why we create interactive and engaging content paired with strong visuals to create brand awareness that keep visitors coming back.
    </div>
    
    <span></span>
    
    <img src="images/our-method-market.png" alt="">
    <div>
      <h3>MARKET</h3>
      Our team adapts, designs and implements the most sensible and successful marketing campaigns inline with your needs to promote growth. We seek out and utilize the avenues that best suit your business needs.
    </div>
    
    <span></span>
    
    <img src="images/our-method-analyze.png" alt="">
    <div>
      <h3>ANALYZE</h3>
      With every stage of the process, we develop reports that analyze the success and growth of your website, social, and/or marketing campaigns. And from these reports, we fine tune your campaign to keep the consumer engaged.
    </div>
  </div>
</div>

<div class="prefooter-button">
  <a href="about.php" class="button">MEET US</a>
</div>

<div class="prefooter">
  <h3 class="waves-white"><a href="contact.php">LET'S GET STARTED</a></h3>
</div>

<script type="text/javascript" src="inc/scrollreveal.min.js"></script>
<script type="text/javascript">
  window.sr = ScrollReveal();
  sr.reveal('.capabilities-banner-content', { origin: 'left' });
  sr.reveal('.capabilities DIV', { rotate: { x: 0, y: 180, z: 0 }, delay: 100 }, 50);
  sr.reveal('.our-method .site-width IMG', { origin: 'top' });
  sr.reveal('.our-method .site-width DIV', { origin: 'top', delay: 200 });
  sr.reveal('.prefooter-button', { origin: 'top', duration: 1000 });
  sr.reveal('.prefooter H3', { rotate: { x: 180, y: 0, z: 0 } });
</script>

<?php include "footer.php"; ?>