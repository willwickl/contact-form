<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link 
    rel="stylesheet" 
    href="styles.css">
    <title>Contact Form</title>
</head>
<body>
    <main>
        <p class="heading">Contact Me</p>
        <form class="contact-form" action="contactform.php" method="post">
            <input type="text" name="name" placeholder="Enter Your Name">
            <input type="email" name="mail" placeholder="Enter Your Email">
            <input type="text" name="subject" placeholder="Enter Your Subject">
            <textarea class="message" name="message" placeholder="Enter Your Message"></textarea>
            <button type="submit" name="submit">Send Mail</button>
        </form>
    </main>
</body>
</html>