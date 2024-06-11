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
    <script src="scripts.js" defer></script>
    <title>SkyLink</title>
</head>
<body>
<?php
include_once "navbar.php";
?>
<h1>this is the users dashboard</h1>
</body>
