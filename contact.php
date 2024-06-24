<?php
require_once('connect.php');
include_once("login-logic.php");
/**
 * @var $pdo ;
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link rel="icon" type="image/x-icon" href="imgs/tab-logo.png"/>
    <link rel="stylesheet" href="style.css"/>

    <title>Contact</title>
</head>
<body class="contact-page">
<?php
include_once("navbar.php");
include_once("logIn-Popups.php");
?>
<div class="container">
    <div class="contact-content-container">
        <div class="contact-content">
            <div class="contact-txt-container">
                <div class="contact-txt">
                    <h1>Let's talk about <br> everything!</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br> Voluptas debitis, fugit natus?</p>
                </div>
                <img src="imgs/contact-bg.png" alt="">
            </div>
            <div class="contact-form-container">
                <form action="send-contact-email.php" method="post">
                    <input class="input" type="text" name="contact-name" placeholder="Your name">
                    <input class="input" type="email" name="contact-email" placeholder="Email">
                    <input class="input" type="text" name="contact-subject" placeholder="Subject">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write your message"></textarea>
                    <input class="contact-submit" type="submit" name="contact-submit" value="Send Message">
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
