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

            <div class="send-email-container">

                    <h1>THANK YOU!</h1>

                <img class="send-img" src="imgs/email-send-img.png" alt="Contact illustrations">
            </div>




</body>
</html>
