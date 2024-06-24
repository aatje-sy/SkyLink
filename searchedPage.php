<?php
require_once('connect.php');
include_once("login-logic.php");

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

<?php
    include_once("navbar.php");
    include_once ("logIn-Popups.php");
?>



    <form method="get" class="searched-container flex">
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
                <form method="post" style="gap: 10px" class="flex">
                    <input class="Search-input check-in-input flex" name="start_date" type="date"  minlength="<?php echo $searchResult[0]["start_date"];?>" maxlength="<?php echo $searchResult[0]["end_Date"];?>">
                </form>
                <p class="search-txt">Departure</p>
            </div>

            <div class="vacation-Info-Input">
                <div style="gap: 10px" class="flex">
                    <input class="Search-input check-out-input flex" name="end_Date" type="date"  minlength="<?php echo $searchResult[0]["start_date"];?>" maxlength="<?php echo $searchResult[0]["end_Date"];?>">
                </div>
                <p class="search-txt">Arrival</p>
            </div>

            <div class="search-btn-container flex">
                <button class="search-btn" name="submitButton">
                    <a style="padding: 15px" href="searchedPage.php">
                        <img class="search-icon" src="imgs/search-icon.png" alt="??">
                    </a>
                </button>
            </div>
        </div>
    </form>

    <div style="height: 150px"></div>

<div class="vacations-container flex">
    <div class="title-searchpage">
        <h1>Places to stay</h1>
    </div>

    <div class="vacation-search-result flex">
    <?php

    /**
     * @var $pdo ;
     */
    $vacationResult = [];

    if (isset($_GET['submitButton']) && !empty($_GET['locationSearch'])) {
        $searchSql = "SELECT id, flight_name, price, main_img FROM `flights` WHERE flight_name LIKE :searchInput";
        $searchStmt = $pdo->prepare($searchSql);
        $var = "%" . $_GET['locationSearch'] . "%";

        $searchStmt->bindParam(":searchInput", $var, PDO::PARAM_STR);
        $searchStmt->execute();
        $vacationResult = $searchStmt->fetchAll();
    } else {
        $sql = "SELECT id, flight_name, price, main_img FROM flights";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $vacationResult = $stmt->fetchAll();
    }

    if (!empty($vacationResult)) {
        foreach ($vacationResult as $value) {
            echo '
            <div class="vacations">
                <a href="vacation-page.php?id='. htmlspecialchars($value["id"]) . '"  style="text-decoration: none">
                    <img class="vacation-img" src="imgs/' . htmlspecialchars($value["main_img"]) . '" alt="">
                    <div class="vacation-base-info flex">
                        <div class="vacation-name-txt flex">
                            <h3 style="font-weight: 600;">'. htmlspecialchars($value["flight_name"]) .'</h3>
                            <p style="color: #AAAAAA">
                                <img src="imgs/coffee-icon.png" alt=""> Breakfast included
                            </p>
                        </div>
                        <div class="price-vacation" style="color: #57C27D"> €' . htmlspecialchars($value["price"]) . '</div>
                    </div>
                </a>
            </div>';
        }
    } else {
        echo 'No results found.';
    }
    ?>
    </div>
</div>

    <?php include_once ("footer.php")?>
    <script src="scripts.js"></script>
</body>
</html>