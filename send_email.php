<?php
$email_to = "cas.saratin@gmail.com";

function problem($error)
{
    echo "We're sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br><br>";
    echo $error . "<br><br>";
    echo "Please go back and fix these errors.<br><br>";
    die();
}

// validation expected data exists
if (!isset($_POST['name'])) {
    problem("missing name");
}
if (!isset($_POST['email'])) {
    problem("missing email");
}
if (!isset($_POST['message'])) {
    problem("missing message");
}

$name = $_POST['name']; // required
$email = $_POST['email']; // required
$message = $_POST['message']; // required
$subject = "New form submissions";
if (isset($_POST['subject'])) {
    $subject = $_POST['subject'];
}

$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if (!preg_match($email_exp, $email)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br>';
}

if (strlen($message) < 2) {
    $error_message .= 'Please enter a message for us!<br>';
}

if (strlen($error_message) > 0) {
    problem($error_message);
}

$email_message = "Email message received!\n\n";

function clean_string($string)
{
    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
    return str_replace($bad, "", $string);
}

$email_message .= "Name: " . clean_string($name) . "\n";
$email_message .= "Email Address: " . clean_string($email) . "\n";
$email_message .= "Subject: " . clean_string($subject) . "\n";
$email_message .= "Message: " . clean_string($message) . "\n";

// create email headers
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($email_to, $subject, $email_message, $headers);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.min.css"><!-- Bootstrap CSS -->
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap_overrides.css" rel="stylesheet" type="text/css">
  <link href="css/styles.css" rel="stylesheet" type="text/css">

 <!-- copied from lb2 but trying adjustments to properly center crystal-->
  <title>Christ As Us</title>
</head>
<body>
Thanks for reaching out!
</body>
</html>
