<?php

session_start();
if (!isset($_SESSION ["loggedUser"])) {
    header("location: index.php");
}
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

<section class="booking-page">
    <div class="booking-page-content">
        <div class="booking-title">
            <h1>Bookings List</h1>
        </div>

        <div class="booking-card">
            <p>Trip Name</p>
            <p>Price</p>
            <p>Persons</p>
            <button class="cancel-btn">Cancel</button>
        </div>
    </div>
</section>

<script src="sideNav.js"></script>
</body>
</html>
