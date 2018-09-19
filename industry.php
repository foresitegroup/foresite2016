<?php
$PageTitle = "Industrial Work";
$Description = "";
$Keywords = "";
include "header.php";
?>

<div id="industry-banner">
  <div class="site-width">
    <h1>WE UNDERSTAND INDUSTRIAL</h1>

    <h2>MANUFACTURERS &amp; DISTRIBUTORS</h2>

    <h3>INDUSTRIAL WEBSITE DESIGN & DEVELOPMENT</h3>

    With over 40 years of combined experience in website design and development, as well as online advertising for industrial companies, we are a perfect fit for distributors and manufacturers.<br>
    <br>

    We recognize that every business has their own needs within their respected industries. As a team we take the time to listen, understand the area of expertise, guide, and work directly with you through a process unique to your story.
  </div>
</div>

<div id="industry-recent">
  RECENT INDUSTRIAL WORK
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $(".tile-hover-content H2").fitText(0.85, { minFontSize: '12px', maxFontSize: '54px' });
  });
</script>

<div id="industry-work" class="cf">
  <div class="tile tile3x1" style="background-image: url(images/project-rivcrete.jpg);">
    <div class="tile-link">
      <div class="tile-hover-content">
        <h2>RIV/CRETE</h2>

        MANUFACTURER<br>
        <br>

        <a href="https://rivcrete.com">CLIENT SITE</a>
      </div>
    </div>
  </div>

  <div class="tile tile3x1" style="background-image: url(images/project-spp.jpg);">
    <div class="tile-link">
      <div class="tile-hover-content">
        <h2>SULLIVAN PRECISION PLATE</h2>

        MANUFACTURER<br>
        <br>

        <a href="https://sullivanplate.com">CLIENT SITE</a><br>
        <a href="sullivan.php">OUR IMPACT</a>
      </div>
    </div>
  </div>

  <div class="tile tile3x1" style="background-image: url(images/project-kmtooling.jpg);">
    <div class="tile-link">
      <div class="tile-hover-content">
        <h2>KM TOOLING</h2>

        MANUFACTURER<br>
        <br>

        <a href="http://kmtdelivers.com">CLIENT SITE</a><br>
        <a href="kmtooling.php">OUR IMPACT</a>
      </div>
    </div>
  </div>

  <div class="tile tile3x1" style="background-image: url(images/project-sherwin.jpg);">
    <div class="tile-link">
      <div class="tile-hover-content">
        <h2>SHERWIN INDUSTRIES</h2>

        DISTRIBUTOR<br>
        <br>

        <a href="https://sherwinindustriesinc.com">CLIENT SITE</a>
      </div>
    </div>
  </div>

  <div class="tile tile3x1" style="background-image: url(images/project-suzys.jpg);">
    <div class="tile-link">
      <div class="tile-hover-content">
        <h2>SUZY'S CHEESECAKES</h2>

        DISTRIBUTOR<br>
        <br>

        <a href="https://suzys.com">CLIENT SITE</a><br>
        <a href="suzys.php">OUR IMPACT</a>
      </div>
    </div>
  </div>

  <div class="tile tile3x1" style="background-image: url(images/project-jims-cheese.jpg);">
    <div class="tile-link">
      <div class="tile-hover-content">
        <h2>JIM'S CHEESE</h2>

        DISTRIBUTOR<br>
        <br>

        <a href="https://jimscheese.com">CLIENT SITE</a><br>
        <a href="jims-cheese.php">OUR IMPACT</a>
      </div>
    </div>
  </div>
</div>

<div id="industry-offer">
  <h2>SPECIAL OFFER!</h2>
  <h1>FREE CORPORATE LOGO DESIGN</h1><br>
  [WITH SIGNED WEBSITE PROJECT]
</div>

<div class="contact">
  <div class="site-width">
    <div id="industry-contact">
      <h1>LET'S TALK!</h1>
      <span>GIVE US A CALL AT</span> <a href="tel:4145221235">414.522.1235</a><br>
      OR USE THE FORM BELOW
    </div>

    <script type="text/javascript">
      $(document).ready(function() {
        var form = $('#contact-form');
        var formMessages = $('#contact-form-messages');
        $(form).submit(function(event) {
          event.preventDefault();

          function formValidation() {
            if ($('#name').val() === '') { alert('Name required.'); $('#name').focus(); return false; }
            if ($('#email').val() === '') { alert('Email required.'); $('#email').focus(); return false; }
            if ($('#message').val() === '') { alert('Message required.'); $('#message').focus(); return false; }
            return true;
          }

          if (formValidation()) {
            var formData = $(form).serialize();
            formData += '&src=ajax';

            $.ajax({
              type: 'POST',
              url: $(form).attr('action'),
              data: formData
            })
            .done(function(response) {
              $(formMessages).html(response);

              $(form).find('input:text, textarea').val('');
              $('#email').val(''); // Grrr!
            })
            .fail(function(data) {
              if (data.responseText !== '') {
                $(formMessages).html(data.responseText);
              } else {
                $(formMessages).text('Oops! An error occured and your message could not be sent.');
              }
            });
          }
        });
      });
    </script>

    <?php
    // Settings for randomizing form field names
    $ip = $_SERVER['REMOTE_ADDR'];
    $timestamp = time();
    $salt = "ForesiteGroupContactForm";
    ?>

    <noscript>
    <?php
    $feedback = (!empty($_SESSION['feedback'])) ? $_SESSION['feedback'] : "";
    unset($_SESSION['feedback']);
    ?>
    </noscript>

    <form action="form-contact.php" method="POST" id="contact-form">
      <div>
        <input type="text" name="<?php echo md5("name" . $ip . $salt . $timestamp); ?>" id="name" placeholder="Your Name">

        <input type="email" name="<?php echo md5("email" . $ip . $salt . $timestamp); ?>" id="email" placeholder="Email Address">

        <input type="tel" name="<?php echo md5("phone" . $ip . $salt . $timestamp); ?>" id="phone" placeholder="Phone Number">

        <div class="select">
          <select name="subject">
            <option value="Contact From Foresite Group Website">HOW CAN WE HELP?</option>
            <option value="New Business">NEW BUSINESS</option>
            <option value="Opportunities">OPPORTUNITIES</option>
            <option value="I Have A Question">I HAVE A QUESTION</option>
            <option value="Contact From Foresite Group Website">OTHER</option>
          </select>
        </div>

        <textarea name="<?php echo md5("message" . $ip . $salt . $timestamp); ?>" id="message" placeholder="Comments, Questions"></textarea>

        <input type="checkbox" name="getemails" value="Yes, I would like to periodically recieve emails from the Foresite Team." id="getemails">
        <label for="getemails">Yes, I would like to periodically recieve emails from the Foresite Team.</label>

        <div id="contact-form-messages"><?php echo $feedback; ?></div>

        <input type="hidden" name="referrer" value="industry.php">

        <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

        <input type="submit" name="submit" value="SEND MESSAGE!">
      </div>
    </form>
  </div>
</div>

<div class="prefooter">
  <h3 class="waves-white"><a href="work.php">SEE ALL OUR WORK</a></h3>
</div>

<script type="text/javascript" src="inc/scrollreveal.min.js"></script>
<script type="text/javascript">
  window.sr = ScrollReveal();
  sr.reveal('#industry-banner .site-width', { origin: 'left' });
  sr.reveal('.tile', { rotate: { x: 0, y: 180, z: 0 }, delay: 100 }, 100);
  sr.reveal('.prefooter-button', { origin: 'top', duration: 1000 });
  sr.reveal('.prefooter H3', { rotate: { x: 180, y: 0, z: 0 } });
</script>

<?php include "footer.php"; ?>