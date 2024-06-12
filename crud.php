<?php
include("connect.php");
/**
 * @var $pdo ;
 */
if (isset($_POST ["addSubmit"])){
    $sqlAdd = "INSERT INTO flights (flight_name, discription, price) VALUES (:flight_name, :discription, :price)";
    $stmtAdd = $pdo->prepare($sqlAdd);
    $stmtAdd->bindParam(':flight_name', $_POST['add-name']);
    $stmtAdd->bindParam(':discription', $_POST['add-info']);
    $stmtAdd->bindParam(':price', $_POST['add-price']);
    $stmtAdd->execute();
}
