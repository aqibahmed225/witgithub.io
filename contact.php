<?php

// check if the form has been submitted
if (isset($_POST['submit'])) {
    // get the form data
    $name = $_POST['Name'];
    $subject = $_POST['Subject'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    // build the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // send the email
    mail('mdaqibahmed225@email.com', $subject, $message, $headers);
}

?>
