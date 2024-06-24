<?php
    session_start();
    require_once('connect.php');

/**
 * @var $pdo ;
 */

    if (isset($_POST['bookFlight'])){

        $bookingSQL = "INSERT INTO bookings (userID, flight_ID) VALUES (:bookerID, :id)";
        $bookingStmt = $pdo->prepare($bookingSQL);
        $bookingStmt->bindParam(':bookerID', $_SESSION['bookerID']);
        $bookingStmt->bindParam(':id', $_GET['id']);
        $bookingStmt->execute();
    }

?>
