<?php
session_start();
if (!isset($_SESSION ["loggedUser"])) {
    header ("location: index.php");
}
?>
<!--users pagina-->
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

    <title>Account</title>
</head>
<body>
<?php
include_once "navbar.php";
?>

<nav class="account-nav-container" id="accountNavContainer">
    <div class="side-bar-toggle" id="sideNavToggle">
        <i class="bi bi-arrow-right-short"></i>
    </div>
    <div class="side-nav-content">
        <ul>
            <li><a href="user.php"><i class="bi bi-person"></i>Personal info</a></li>
            <li><a href="user.php"><i class="bi bi-file-lock"></i>Login and security</a></li>
            <li><a href="user-bookings.php"><i class="bi bi-house-door"></i>Bookings</a></li>
            <li><a href="user.php"><i class="bi bi-gear"></i>Settings</a></li>
        </ul>
    </div>
</nav>

<section class="personal-info-page">

    <div class="title-container">
        <h1>Personal info</h1>
    </div>
    <div class="form-container">
        <form class="personal-info-form" action="user.php" method="post">
            <input class="input" type="text" placeholder="Change your name">
            <div>
            <input class="input" type="text" placeholder="Change your last name">
            </div>
            <input class="update-profile-submit" type="submit">
        </form>
    </div>
</section>
<script src="sideNav.js"></script>
</body>
</html>
