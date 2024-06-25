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
include_once("logIn-Popups.php");
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
        <div class="popular-trips-container">
            <?php
            $sqlRead = "SELECT * FROM `flights` WHERE `id` = 1 OR id = 2 OR id = 3;";
            $readStmt = $pdo->query($sqlRead);
            foreach ($readStmt as $readRow) {
                ?>
                <div class="middle"></div>
                <div class="vacation-card-container">
                    <div class="vacation-card">
                        <img src="imgs/<?php echo $readRow['main_img'] ?>" alt="mountain image">
                        <div class="info-card">
                            <h4><?php echo $readRow['flight_name'] ?></h4>
                            <div class="vacation-card-details">
                                <i class="bi bi-cup-hot-fill"></i>
                                <p>Breakfast included</p>
                            </div>
                            <p class="card-price"><?php echo "€" . $readRow['price'] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="about-section">
    <div class="about-content-container">
        <div class="about-txt-container">
            <h3>ABOUT US</h3>
            <p>Welcome to Skylink, your gateway to the perfect vacation! Whether you're dreaming of a sunny beach
                getaway, a thrilling adventure, or a cultural city break, we're here to make your travel plans easy and
                exciting. At Skylink, we believe that everyone deserves a fantastic holiday experience, and we're
                committed to helping you find the best deals and destinations. <br> <br>

                With a wide range of flight options, personalized recommendations, and 24/7 support, Skylink is your
                trusted partner in exploring the world. Let's make your next vacation unforgettable!</p>
        </div>

        <img class="about-img" src="imgs/about-img.png" alt="">
    </div>
</section>

<section class="top-values-section">
    <div class="top-values-content-container">
        <div class="top-values-txt-container">
            <h3>Top values for you</h3>
            <p>Find trips that fit a flexible lifestyle</p>
        </div>
        <div class="top-values-container">
            <div class="top-value">
                <img src="imgs/value1.png" alt="">
                <h5>Airport Pickup</h5>
                <p>We offer escort services from the airport to the hotel.</p>
            </div>
            <div class="top-value">
                <img src="imgs/value2.png" alt="">
                <h5>Easy booking</h5>
                <p>We offer escort services from the airport to the hotel.</p>
            </div>
            <div class="top-value">
                <img src="imgs/value3.png" alt="">
                <h5>Best tour guide</h5>
                <p>We offer escort services from the airport to the hotel.</p>
            </div>
            <div class="top-value">
                <img src="imgs/value4.png" alt="">
                <h5>Lots of promos</h5>
                <p>We offer escort services from the airport to the hotel.</p>
            </div>
        </div>
    </div>
</section>

<?php include_once("footer.php"); ?>

</body>
</html>
