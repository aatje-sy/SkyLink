<?php
    require_once('connect.php');

/**
 * @var $pdo ;
 */

    ?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8" />
    <meta
            name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>SkyLink Search</title>
</head>
<body>

<?php include_once("Nav.php") ?>

<?php
require_once("connect.php");
/**
 * @var $pdo ;
 */
    if (isset($_GET['locationSearch'])){
    $zoekQuery = "SELECT FROM SkyLink WHERE flight_name LIKE :zoekinput";
    $stmt = $pdo ->prepare($zoekQuery);
    $var = "%" . $_GET['search'] . "%";
    $stmt -> bindParam( ":zoekinput" , $var);
    if (isset($_GET['submit-searchbar'])){
        $stmt->execute();
        }
    }
    ?>


    <div class="searched-container flex">
        <img class="searched-img" src="imgs/seachedIMG.png" alt="Error">
        <div class="search-panel-titleTXT">
            <h1>Unlock the Sky</h1>
            <p>Enjoy the great experience</p>
        </div>

        <div class="search-Bar flex">
            <div class="vacation-Info-Input">
                <div style="gap: 10px" class="flex">
                    <img class="input-icon" src="imgs/locationIcon.png" alt="">
                    <div>
                        <input class="Search-input location-input" name="locationSearch" type="text" placeholder="Location">
                        <p class="search-txt ">Where are you going?</p>
                    </div>
                </div>


            </div>

            <div class="vacation-Info-Input">
                <div style="gap: 10px" class="flex">
                    <input class="Search-input check-in-input flex" name="checkin" type="date" placeholder="Check in">
                </div>
                <p class="search-txt">Departure</p>
            </div>

            <div class="vacation-Info-Input">
                <div style="gap: 10px" class="flex">
                    <input class="Search-input check-out-input flex" name="checkout" type="date" placeholder="Check in">
                </div>
                <p class="search-txt">Arrival</p>
            </div>

            <form method="get" class="search-btn-container flex">
                <button name="submit-searchbar" class="search-btn" type="submit" >
                        <img class="search-icon" src="imgs/search-icon.png" alt="??">
                </button>
            </form>
        </div>
    </div>

    <div style="height: 150px"></div>

<div class="vacations-container flex">
    <div class="title-searchpage">
        <h1 class="">Places to stay</h1>
    </div>

    <div class="vacation-search-result flex">
    <?php
    /**
     * @var $pdo ;
     */

    $sql = "SELECT flight_name, price FROM flights";
    $resultSearchPage = $pdo->query($sql);

    while ($fetchCard = $resultSearchPage -> fetch()) {
        echo '
        <div class="vacations">
            <a href="vacation-page.php" style="text-decoration: none">
                <img class="vacation-img" src="imgs/italian-land.jpg" alt="">
                <div class="vacation-base-info flex">
                    <div class="vacation-name-txt flex">
                        <h3 style="font-weight: 600;">' .$fetchCard["flight_name"] . '</h3>
                        <p style="text-align: center; color: #AAAAAA">
                            <img src="imgs/coffee-icon.png" alt=""> Breakfast included
                        </p>
                    </div>
                    <div class="price-vacation" style="color: #57C27D">' . $fetchCard["price"] . '</div>
                </div>
            </a>
        </div>';
    }
    ?>
    </div>


    <?php include_once ("footer.php")?>
    <script src="scripts.js"></script>
</body>
</html>