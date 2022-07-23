<?php

if (isset($_POST['submit'])) { // Name of button is submit
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "williamtwicklund@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "This email is from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact-form.php?mail-sent");
}
?>