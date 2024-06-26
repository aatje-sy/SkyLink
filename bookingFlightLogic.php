<?php
    require_once('connect.php');

/**
 * @var $pdo ;
 */

function isUserLoggedIn() {
    if(!isset($_SESSION['loggedUser'])){
        echo 'You have to login';
    }
}


    if (isset($_POST['bookFlight'])) {

            $bookingSQL = "INSERT INTO bookings (userID, flight_ID) VALUES (:bookerID, :id)";
            $bookingStmt = $pdo->prepare($bookingSQL);
            $bookingStmt->bindParam(':bookerID', $_SESSION['bookerID']);
            $bookingStmt->bindParam(':id', $_GET['id']);
            $bookingStmt->execute();
            header("Location: vacation-page.php" . $_GET['id']);
            exit();

    }
    ?>