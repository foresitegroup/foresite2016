<?php
$PageTitle = "About";
$Description = "";
$Keywords = "";
include "header.php";
?>

<script type="text/javascript" src="inc/jquery.scrollTo.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".capabilities-banner-content .button").click(function(e) {
      $.scrollTo("#team",{duration: 600});
      e.preventDefault();
    });
  });
</script>

<div class="capabilities-banner">
  <div class="site-width">
    <div class="capabilities-banner-content">
      <h1>WE'RE NOT A COOKIE CUTTER FIRM...</h1>

      <h3>So we won't provide cookie cutter solutions.</h3>

      We recognize that every business has their own needs within their respected industries. As a team we take the time to listen, understand the area of expertise, guide and work directly with our clients through a process unique to their story.<br>

      <a href="" class="button">MEET THE TEAM</a>
      <span class="cb-capabilities">CAPABILITIES <i class="fa fa-play fa-rotate-90" aria-hidden="true"></i></span>
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
  <div>ANIMATION</div>
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

<link rel="stylesheet" href="inc/slick/slick.css">
<script type="text/javascript" src="inc/slick/slick.min.js"></script>
<script type="text/javascript" src="inc/slick/slick.init.about-logo-slider.js"></script>
<div class="worked-with">
  <div class="one-fifth"><img src="images/about-harken.png" alt="Harken"></div>
  <div class="one-fifth"><img src="images/about-bublr.png" alt="Bublr Bikes"></div>
  <div class="one-fifth"><img src="images/about-marquette.png" alt="Marquette University"></div>
  <div class="one-fifth"><img src="images/about-belardi.png" alt="Belardi Auto Racing"></div>
  <div class="one-fifth"><img src="images/about-kubly.png" alt="The Charles E. Kubly Foundation"></div>
  <div class="one-fifth"><img src="images/about-louies.png" alt="Louie's Last Regatta"></div>
  <div class="one-fifth"><img src="images/about-suzys.png" alt="Suzy's Cream Cheesecakes"></div>
  <div class="one-fifth"><img src="images/about-chaput.png" alt="Chaput Land Surveys"></div>
  <div class="one-fifth"><img src="images/about-usm.png" alt="Univeristy School of Milwaukee"></div>
  <div class="one-fifth"><img src="images/about-jimscheese.png" alt="Jim's Cheese"></div>
  <div class="one-fifth"><img src="images/about-life-productions.png" alt="Life Productions"></div>
  <div class="one-fifth"><img src="images/about-mcbe.png" alt="Milwaukee Craft Beer Exchange"></div>
  <div class="one-fifth"><img src="images/about-mortons.png" alt="Morton's Wisconsinn"></div>
  <div class="one-fifth"><img src="images/about-iam.png" alt="Investment Account Manager"></div>
  <div class="one-fifth"><img src="images/about-deviation.png" alt="Deviation"></div>
  <div class="one-fifth"><img src="images/about-michaelthomas.png" alt="Michael-Thomas"></div>
  <div class="one-fifth"><img src="images/about-sullivan.png" alt="Sullivan Corporation"></div>
  <div class="one-fifth"><img src="images/about-dominican.png" alt="Dominican High School"></div>
  <div class="one-fifth"><img src="images/about-fear.png" alt="Nicolet FEAR"></div>
  <div class="one-fifth"><img src="images/about-moldeddimensions.png" alt="Molded Dimensions"></div>
</div>

<div id="team">
  <div class="site-width">
    Our team consists of creative thinkers, pixel pushers, digital strategists &amp; content specialists, avid sailors, semi-pro ping pong players and craft beer enthusiasts who believe in <strong>good design, better ideas and the best work ethic</strong>. We do not see ourselves as a know-it-all, have-it-all agency, but a collaborative and skilled group dedicated to giving our best to our clients day in and day out.
  </div>
</div>

<div class="about site-width-wide">
  <h2>COMPANY LEADERSHIP</h2>

  <div class="one-fourth">
    <div class="team" style="background-image: url(images/team-francis.jpg);">
      <a class="team-link">
        <div class="team-hover-content">
          Seattle University.<br>
          Content Development, 17 Years in Marketing &amp; Brand Development.<br>
          Avid sailor &amp; craft beer enthusiast.
        </div>
      </a>
    </div>

    <div class="team-name">FRANCIS MORTON</div>
    <div class="team-title">FOUNDER/OWNER</div>
    <div class="team-email"><?php email("francis@foresitegrp.com"); ?></div>
    <div class="social team-social">
      <a href="https://twitter.com/foresitegrp"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="http://instagram.com/foresitegrp"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="https://www.linkedin.com/in/francis-morton-380a763"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </div>
  </div>

  <div class="one-fourth">
    <div class="team" style="background-image: url(images/team-robert.jpg);">
      <a class="team-link">
        <div class="team-hover-content">
          UW-Milwaukee.<br>
          BFA in Design &amp; Visual Comm.<br>
          Music nerd, amateur craftsman &amp; houseplant aficionado.
        </div>
      </a>
    </div>

    <div class="team-name">ROBERT VELA</div>
    <div class="team-title">ART DIRECTOR</div>
    <div class="team-email"></div>
    <div class="social team-social"></div>
  </div>

  <div class="one-fourth">
    <div class="team" style="background-image: url(images/team-mark.jpg);">
      <a class="team-link">
        <div class="team-hover-content">
          Once shot a man just for snoring too loud.
        </div>
      </a>
    </div>

    <div class="team-name">MARK LIPPERT</div>
    <div class="team-title">SENIOR DEVELOPER</div>
    <div class="team-email"></div>
    <div class="social team-social">
      <a href="http://instagram.com/hurtsquirrels"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      <a href="https://www.linkedin.com/in/mark-lippert-81515896"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </div>
  </div>

<!--   <div class="one-fourth">
    <div class="team" style="background-image: url(images/team-tara.jpg);">
      <a class="team-link">
        <div class="team-hover-content">
          Marquette University.<br>
          Content Development, Social Media Management and Marketing.<br>
          Likes her coffee strong.
        </div>
      </a>
    </div>

    <div class="team-name">TARA KNIEP</div>
    <div class="team-title">CONTENT SPECIALIST</div>
    <div class="team-email"></div>
    <div class="social team-social">
      <a href="https://twitter.com/TaraKniep"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="https://www.linkedin.com/in/tara-kniep-3387a5b6/"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
    </div>
  </div> -->
</div>

<script type="text/javascript" src="inc/slick/slick.init.about-slider.js"></script>
<div class="about-slider">
  <div><img src="images/about-slider1.jpg" alt=""></div>
  <div><img src="images/about-slider2.jpg" alt=""></div>
  <div><img src="images/about-slider3.jpg" alt=""></div>
  <div><img src="images/about-slider4.jpg" alt=""></div>
</div>

<div class="prefooter">
  <h3 class="waves-white"><a href="contact.php">ASK US HOW...</a></h3>
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