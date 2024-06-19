<?php
include("connect.php");
/**
 * @var $pdo ;
 */
if (isset($_POST ["addSubmit"])) {
    $sqlAdd = "INSERT INTO flights (flight_name, discription, price) VALUES (:flight_name, :discription, :price)";
    $stmtAdd = $pdo->prepare($sqlAdd);
    $stmtAdd->bindParam(':flight_name', $_POST['add-name']);
    $stmtAdd->bindParam(':discription', $_POST['add-info']);
    $stmtAdd->bindParam(':price', $_POST['add-price']);
    $stmtAdd->execute();
}


if (isset($_POST ["deleteSubmit"])) {
    $id = $_POST ["deleteId"];
    $sqlDelete = "DELETE FROM flights WHERE id = :id";
    $stmtDelete = $pdo->prepare($sqlDelete);
    $stmtDelete->bindParam(':id', $id);
    $stmtDelete->execute();
    echo "deleted successfully";
}


if (isset($_POST['updateSubmit'])) {
    $sqlUpdate = "UPDATE `flights` SET flight_name = :flight_name, discription = :discription, price = :price WHERE id = :updateId";
    $stmtUpdate = $pdo->prepare($sqlUpdate);
    $stmtUpdate->bindParam(':flight_name', $_POST['update-name']);
    $stmtUpdate->bindParam(':discription', $_POST['update-info']);
    $stmtUpdate->bindParam(':price', $_POST['update-price']);
    $stmtUpdate->bindParam(':updateId', $_POST['edit-id']);
    $stmtUpdate->execute();
}
else{
    $sql = "SELECT * FROM flights WHERE id = :ID";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':ID', $_POST['edit-id']);
    $stmt->execute();
    $row = $stmt->fetch();
}