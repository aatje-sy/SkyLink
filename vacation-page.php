<?php
require_once('connect.php');
include_once("login-logic.php");

/**
 * @var $pdo ;
 */

$flight_id = $_GET['id'];


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />
    <link rel="icon" type="image/x-icon" href="imgs/tab-logo.png"/>
    <link rel="stylesheet" href="style.css" />
    <title>Vacation</title>
</head>
<body>
<?php include_once("navbar.php");

include_once ("logIn-Popups.php");

?>

    <div class="vacation-3icons flex">
        <div class="vacation-icons flex share-button">
            <i class="bi bi-share-fill"></i>
        </div>
        <div class="vacation-icons flex favourite-button">
            <i class="bi bi-suit-heart default-heart"></i>
            <i class="bi bi-suit-heart-fill" style="display: none;"></i>
        </div>
        <div class="vacation-icons flex back-xButton">
            <i class="bi bi-x" style="font-size: 25px"></i>
        </div>
    </div>
    <?php
    /**
     * @var $pdo ;
     */

    $sql = "SELECT * FROM flights WHERE ID = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->execute();
    $vacationResult = $stmt->fetch();



    $sqlImgs = "SELECT * FROM Images WHERE flight_id = :id";
    $stmtImgs = $pdo->prepare($sqlImgs);
    $stmtImgs->bindParam(":id", $_GET['id']);
    $stmtImgs->execute();
    $images = $stmtImgs->fetchAll();

    ?>

    <div class="photos-container flex">
        <main class="main-img-cont">
            <img class="main-img" src="imgs/<?php echo $vacationResult['main_img'];?>" alt="mainimg">
        </main>
        <aside class="side-img-cont flex">
                <?php

                foreach ($images as $image) {
                    echo '<img class="sideImg" src="/imgs/'. $image['imgs'] .'" alt="Sideimg">';
                }

                ?>
        </aside>
    </div>

    <?php

    if ($vacationResult){

        echo'
        
    <div class="vacation-discription-container flex">
        <div class="vacation-discription">
        <img src="" alt="">
            <div class="vacation-Name">
                <h1 style="color: black">'. $vacationResult['flight_name'] .'</h1>
            </div>
            <div>
                <hr style="margin-bottom: 10px; margin-top: 10px">
            </div>
            <div class="hotel-specifications flex" style="color: #AAAAAA">
                <div class="specification flex">
                    <i class="bi bi-house-check"></i>
                    <p>1 Bedroom</p>
                </div>
                <div class="specification flex">
                    <i class="bi bi-person"></i>
                    <p>2 Guests</p>
                </div>
                <div class="specification flex">
                    <i class="bi bi-flag"></i>
                    <p>Italy</p>
                </div>
            </div>
            <div class="vacation-discription">
                <p>'. $vacationResult['discription'] .'</p>
            </div>
        </div>
        <div class="vacation-booking-gui flex">
            <div class="vacation-gui-txt vacation-price flex">
                <h3>'. $vacationResult['price'] .'</h3>
                <span style="color: #AAAAAA">/Night</span>
            </div>
            <div class="vacation-gui-txt amount-reviews flex">
                <img src="imgs/review-star.png" alt="star">
                <p>4.7</p>
                <p style="color: #AAAAAA">(111 reviews)</p>
            </div>
            <div class="vacation-duration-bar flex">
                <div>
                    <p>Ceck in</p>
                    <input class="flight-period departure-input" type="date">
                </div>
                <div>
                    <p>Check out</p>
                    <input class="flight-period arrival-input" type="date">
                </div>
            </div>
            <div class="booking-buttons flex" style="gap: 20px">
                <button class="save-button">
                    Save +
                </button>
                <button class="booking-button">
                    Book Now
                </button>
            </div>

            <div class="total-bar">

            </div>
        </div>
    </div>
           ';
        }
    ?>

    <div class="container-am flex" style="width: 100%; justify-content: center">
        <div class="Amenities-container flex">
            <h1>Amenities</h1>
            <div class="Amenities flex" style="color: #AAAAAA">
                <div class="left-side flex">
                    <p>
                        <i class="bi bi-wifi"></i>
                        Free wifi
                    </p>
                    <p>
                        <i class="bi bi-cup-hot-fill"></i>
                        Breakfast included
                    </p>
                    <p>
                        <i class="bi bi-buildings-fill"></i>
                        Nearby city
                    </p>
                    <p>
                        <i class="bi bi-credit-card"></i>
                        ATM
                    </p>
                </div>

                <div class="vertical-line">

                </div>
                <div class="right-side flex">
                    <p>
                        <i class="bi bi-droplet-fill"></i>
                        Clean Bathroom
                    </p>
                    <p>
                        <i class="bi bi-buildings-fill"></i>
                        Nearby city
                    </p>
                    <p>
                        <i class="bi bi-credit-card"></i>
                        ATM
                    </p>
                </div>
            </div>
        </div>

        <?php
        /**
         * @var $pdo ;
         */
            if(isset($_POST['review-btn'])){
              $sqlReview = "INSERT INTO `reviews`(`comments`, `flight_id`, `user_id`) VALUES (:comments, :flightID,:userID)";
              $stmtReview = $pdo->prepare($sqlReview);
              $stmtReview -> bindParam(':comments', $_POST['reviewText']);
              $stmtReview -> bindParam(':flightID', $_GET['id']);
              $str = "1";
              $stmtReview -> bindParam(':userID', $str);
              $stmtReview -> execute();
            }


        ?>

        <div class="reviews-container flex">
            <h1>Add Review</h1>
            <form method="post" class="review-input-container flex">
                <input name="reviewText" type="text" class="review-bar" placeholder="Share your thoughts">
                <input type="submit" name="review-btn" href="#" class="review-add-btn">
            </form>

            <h3>Comments:</h3>
            <?php
            /**
             * @var $pdo ;
             */
            $sqlReviewPreview = "SELECT `comments`, `flight_id` FROM `reviews` WHERE flight_id = :flightID";
            $stmtReviewDisplay = $pdo->prepare($sqlReviewPreview);
            $stmtReviewDisplay -> bindParam(':flightID', $_GET['id']);
            $stmtReviewDisplay -> execute();
            $reviewDisplay = $stmtReviewDisplay->fetchAll();

                foreach ($reviewDisplay as $review){


            ?>

            <div class="the-review">
                <form method="get" class="review-texts-bar">
                    <h3></h3>
                    <p><?php echo $review['comments']?></p>
                </form>
                <hr>
            </div>
<?php
                }
?>

        </div>
    </div>



    <?php include_once ("footer.php")?>
</body>
</html>