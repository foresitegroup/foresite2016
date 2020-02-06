<?php
$PageTitle = "Contact";
$Description = "";
$Keywords = "";
include "header.php";
include_once "inc/fintoozler.php";
?>

<!-- <div class="contact-banner">
  <div class="site-width">
    HOW CAN WE HELP?
  </div>
</div> -->

<div class="contact-banner">
  <div class="site-width">
    <h1>GET IN TOUCH</h1>

    Have questions about project in mind, feel like grabbin' a cup of coffee and/or dropping by the studio? Feel free to send us a message or cut straight to the chase and contact us directly.

    <div class="address">
      2018 S 1st St, Suite 310, Milwaukee, WI 53207 <span class="sep"></span> (414) 522-1235 <span class="sep"></span> <?php email("hello@foresitegrp.com"); ?>
    </div>

    <i class="fa fa-play fa-rotate-90" aria-hidden="true"></i>
  </div>
</div>

<div class="contact">
  <div class="site-width">
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
              $('#phone').val('');
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

        <div class="g-recaptcha" data-sitekey="<?php echo RECAPTCHA_SITE_KEY; ?>"></div><br>

        <div id="contact-form-messages"><?php echo $feedback; ?></div>

        <input type="hidden" name="referrer" value="contact.php">

        <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

        <input type="submit" name="submit" value="SEND MESSAGE!">
      </div>
    </form>
  </div>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<div id="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2917.6214033932906!2d-87.91277068452307!3d43.00730597914872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880519bd316cb49d%3A0x5e4e8207faeb6a5!2sForesite+Group%2C+LLC!5e0!3m2!1sen!2sus!4v1537366034292" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="prefooter">
  <h3 class="waves-white"><a href="work.php">VIEW OUR WORK</a></h3>
</div>

<script type="text/javascript" src="inc/scrollreveal.min.js"></script>
<script type="text/javascript">
  window.sr = ScrollReveal();
  sr.reveal('.prefooter H3', { rotate: { x: 180, y: 0, z: 0 } });
</script>

<?php include "footer.php"; ?>