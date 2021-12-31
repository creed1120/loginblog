<?php
include('../functions/custom_functions.php');

if(isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $myEmail = "cedricareed@gmail.com";

    $headers = "From: ". $email ."\r\n";
    $headers = "Reply-To: ". $email ."\r\n";

    $message2 = "You received a message from " . $name . "\n\n" . $message;

    mail($myEmail, $subject, $message2, $headers);

    header("Location: index.php?mailsent");
}

?>