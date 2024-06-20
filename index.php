<?php
require_once('connect.php');
include_once("login-logic.php");

/**
 * @var $pdo ;
 */
?>


<!--index pagian-->
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
    <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap"
            rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="imgs/tab-logo.png"/>
    <link rel="stylesheet" href="style.css"/>
    <script src="scripts.js" defer></script>
    <title>SkyLink</title>
</head>
<body>

<!--navbar-->
<?php
    include_once("navbar.php");
    include_once ("logIn-Popups.php");
?>


<!--index page start-->
<div class="searched-container flex">
    <img class="searched-img" src="imgs/index-page-bg.jpg" alt="Error">
    <div class="search-panel-titleTXT">
        <h1>Unlock the sky with SKYLINK</h1>
        <p>Enjoy the great experience</p>
    </div>

    <div class="search-Bar flex">
        <div class="vacation-Info-Input">
            <div style="gap: 10px" class="flex">
                <img class="input-icon" src="imgs/locationIcon.png" alt="red houses and a mountain in the fog">
                <input class="Search-input location-input" type="text" placeholder="Location">
            </div>
            <p class="search-txt location-txt">Where are you going?</p>

        </div>

        <div class="vacation-Info-Input">
            <div style="gap: 10px" class="flex">
                <input class="Search-input check-in-input flex" type="date" placeholder="Check in">
            </div>
            <p class="search-txt">Departure</p>
        </div>

        <div class="vacation-Info-Input">
            <div style="gap: 10px" class="flex">
                <input class="Search-input check-out-input flex" type="date" placeholder="Check in">
            </div>
            <p class="search-txt">Arrival</p>
        </div>

        <div class="search-btn-container flex">
            <button class="search-btn">
                <a style="padding: 15px" href="searchedPage.php">
                    <img class="search-icon" src="imgs/search-icon.png" alt="??">
                </a>
            </button>
        </div>
    </div>
</div>

<!--Index content1 Live anywhere-->
<section class="live-anywhere-container">
    <div class="live-anywhere">
        <h3>Live anywhere</h3>
        <p>Keep calm & travel on</p>
        <div class="vacation-card-container">
            <div class="vacation-card">
                <img src="imgs/Mountain-img.png" alt="mountain image">
                <div class="info-card">
                    <h4>Italian Landscape</h4>
                    <div class="vacation-card-details">
                        <i class="bi bi-cup-hot-fill"></i>
                        <p>Breakfast included</p>
                    </div>
                    <p class="card-price">€299</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_once("footer.php");?>

</body>
</html>
