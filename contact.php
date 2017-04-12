<?php
$PageTitle = "Contact";
$Description = "";
$Keywords = "";
include "header.php";
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
      2018 S 1st St, Suite 319, Milwaukee, WI 53207 <span class="sep"></span> (414) 522-1235 <span class="sep"></span> <?php email("hello@foresitegrp.com"); ?>
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

        <input type="hidden" name="referrer" value="contact.php">

        <input type="text" name="confirmationCAP" style="display: none;"> <?php // Non-displaying field as a sort of invisible CAPTCHA. ?>

        <input type="hidden" name="ip" value="<?php echo $ip; ?>">
        <input type="hidden" name="timestamp" value="<?php echo $timestamp; ?>">

        <input type="submit" name="submit" value="SEND MESSAGE!">
      </div>
    </form>
  </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
  function ViewLargerMap(VLMa, map) {
    var VLMui = document.createElement('a');
    VLMui.style.cursor = 'pointer';
    VLMui.href = 'https://www.google.com/maps/place/Lincoln+Warehouse/@43.007233,-87.9127278,17z/data=!3m1!4b1!4m5!3m4!1s0x880519dc4ed1040b:0x82ebf558bd045070!8m2!3d43.007233!4d-87.9105391';
    VLMui.target = 'new';
    VLMui.innerHTML = 'View larger map';
    VLMui.style.marginLeft = '7px';
    VLMa.appendChild(VLMui);
  }

  function initialize() {
    var MyLatLng = new google.maps.LatLng(43.007233,-87.9105378);
    var mapCanvas = document.getElementById('map-canvas');
    var mapOptions = {
      center: MyLatLng,
      zoom: 16,
      disableDefaultUI: true,
      scrollwheel: false,
      zoomControl: true,
      zoomControlOptions: {
        style: google.maps.ZoomControlStyle.SMALL,
        position: google.maps.ControlPosition.RIGHT_BOTTOM
      },
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    var map = new google.maps.Map(mapCanvas, mapOptions)
    map.set('styles', [
      {
        "elementType": "geometry",
        "stylers": [{"color": "#f5f5f5"} ]
      },
      {
        "elementType": "labels.icon",
        "stylers": [{"visibility": "off"} ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#616161"} ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [{"color": "#f5f5f5"} ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels",
        "stylers": [{"visibility": "off"} ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#bdbdbd"} ]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{"color": "#eeeeee"} ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text",
        "stylers": [{"visibility": "off"} ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#757575"} ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{"color": "#e5e5e5"} ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#9e9e9e"} ]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [{"color": "#ffffff"} ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#757575"} ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [{"color": "#dadada"} ]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#616161"} ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels",
        "stylers": [{"visibility": "off"} ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#9e9e9e"} ]
      },
      {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [{"color": "#e5e5e5"} ]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [{"color": "#eeeeee"} ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{"color": "#c9c9c9"} ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#9e9e9e"} ]
      }
]);

    var marker = new google.maps.Marker({
      position: MyLatLng,
      map: map,
      icon: "images/map-pin.png"
    });

    var infowindow = new google.maps.InfoWindow({
      content: '<div id="content"><div id="bodyContent"><strong>Foresite Group</strong><br>2018 S 1st St<br>Suite 319<br>Milwaukee, WI 53207<br><a href="https://www.google.com/maps/place/Lincoln+Warehouse/@43.007233,-87.9127278,17z/data=!3m1!4b1!4m5!3m4!1s0x880519dc4ed1040b:0x82ebf558bd045070!8m2!3d43.007233!4d-87.9105391" target="new">View larger map</a></div></div>'
    });

    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
    });

    var vlmDiv = document.createElement('div');
    var vlm = new ViewLargerMap(vlmDiv, map);
    vlmDiv.index = 1;
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(vlmDiv);
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div id="map-canvas"></div>

<div class="prefooter">
  <h3 class="waves-white"><a href="work.php">VIEW OUR WORK</a></h3>
</div>

<script type="text/javascript" src="inc/scrollreveal.min.js"></script>
<script type="text/javascript">
  window.sr = ScrollReveal();
  sr.reveal('.prefooter H3', { rotate: { x: 180, y: 0, z: 0 } });
</script>

<?php include "footer.php"; ?>