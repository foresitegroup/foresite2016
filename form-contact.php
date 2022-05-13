<?php
session_start();

$salt = "ForesiteGroupContactForm";

include_once "inc/fintoozler.php";

if (isset($_POST['g-recaptcha-response'])) {
  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".RECAPTCHA_SECRET_KEY."&response=".$_POST['g-recaptcha-response']);
  $responsekeys = json_decode($response);
}

if ($responsekeys->success) {
  if ($_POST['confirmationCAP'] == "") {
    if (
        $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] != "" &&
        $_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])] != ""
       )
    {
      $Subject = $_POST['subject'];
      $SendTo = "info@foresitegrp.com";
      $From = "From: Contact Form <contactform@foresitegrp.com>\r\n";
      $From .= "Reply-To: " . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . "\r\n";

      $Message = "Message from " . $_POST[md5('name' . $_POST['ip'] . $salt . $_POST['timestamp'])] . " (" . $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])] . ")";

      $Message .= (isset($_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])])) ? "\n\nPhone: " . $_POST[md5('phone' . $_POST['ip'] . $salt . $_POST['timestamp'])] : "";

      $Message .= "\n\n" . $_POST[md5('message' . $_POST['ip'] . $salt . $_POST['timestamp'])];

      // if (isset($_POST['getemail'])) $Message .= "\n\n" . $_POST['getemail'];
      // Add info to MailChimp
      // if (isset($_POST['getemail'])) {
        $mcdata = array(
          'email'  => $_POST[md5('email' . $_POST['ip'] . $salt . $_POST['timestamp'])],
          'status' => 'subscribed'
        );

        function syncMailchimp($mcdata) {
          $memberId = md5(strtolower($mcdata['email']));
          $dataCenter = substr(MAILCHIMP_API,strpos(MAILCHIMP_API,'-')+1);
          $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . MAILCHIMP_LIST_ID . '/members/' . $memberId;

          $json = json_encode(array(
            'email_address' => $mcdata['email'],
            'status'        => $mcdata['status']
          ));

          $ch = curl_init($url);

          curl_setopt($ch, CURLOPT_USERPWD, 'user:' . MAILCHIMP_API);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_TIMEOUT, 10);
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          curl_setopt($ch, CURLOPT_POSTFIELDS, $json);

          $result = curl_exec($ch);
          $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
          curl_close($ch);

          return $httpCode;
        }

        syncMailchimp($mcdata);
      // }

      $Message = stripslashes($Message);
    
      mail($SendTo, $Subject, $Message, $From);
      
      $feedback = "<strong>Your message has been sent!</strong> Thank you for your interest. You will be contacted shortly.";

      if (isset($_REQUEST['src'])) {
        header("HTTP/1.0 200 OK");
        echo $feedback;
      }
    } else {
      $feedback = "<strong>Some required information is missing! Please go back and make sure all required fields are filled.</strong>";

      if (isset($_REQUEST['src'])) {
        header("HTTP/1.0 500 Internal Server Error");
        echo $feedback;
      }
    }
  }

  if (!isset($_REQUEST['src'])) {
    $_SESSION['feedback'] = $feedback;
    header("Location: " . $_POST['referrer'] . "#contact-form");
  }
}
?>