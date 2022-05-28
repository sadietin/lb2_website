<?php
$email_to = "john@tinetti.net";

function problem($error)
{
    echo "We're sorry, but there were error(s) found with the form you submitted. ";
    echo "These errors appear below.<br><br>";
    echo $error . "<br><br>";
    echo "Please go back and fix these errors.<br><br>";
    die();
}

// validation expected data exists
if (
    !isset($_POST['name']) ||
    !isset($_POST['email']) ||
    !isset($_POST['message'])
) {
    echo "name: ";
    echo $_POST['name'];
    echo "<br>";
    
    echo "Name: ";
    echo $_POST['Name'];
    echo "<br>";
    
    echo "email: ";
    echo $_POST['email'];
    echo "<br>";
    
    echo "subject: ";
    echo $_POST['subject'];
    echo "<br>";
    
    echo "message: ";
    echo $_POST['message'];
    echo "<br>";

    problem("problem?");
}

$name = $_POST['name']; // required
$email = $_POST['email']; // required
$message = $_POST['message']; // required
$email_subject = "New form submissions";
if (isset($_POST['subject'])) {
    $email_subject = $_POST['subject'];
}

$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if (!preg_match($email_exp, $email)) {
    $error_message .= 'The Email address you entered does not appear to be valid.<br>';
}

$string_exp = "/^[A-Za-z .'-]+$/";

if (!preg_match($string_exp, $name)) {
    $error_message .= 'The Name you entered does not appear to be valid.<br>';
}

if (strlen($message) < 2) {
    $error_message .= 'The Message you entered do not appear to be valid.<br>';
}

if (strlen($error_message) > 0) {
    problem($error_message);
}

$email_message = "Form details below.\n\n";

function clean_string($string)
{
    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
    return str_replace($bad, "", $string);
}

$email_message .= "Name: " . clean_string($name) . "\n";
$email_message .= "Email: " . clean_string($email) . "\n";
$email_message .= "Message: " . clean_string($message) . "\n";

// create email headers
$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

Thanks for getting in touch. We'll get back to you soon.
