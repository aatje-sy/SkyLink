<?php
//require_once "connect.php";
///**
// * @var $pdo ;
// */
//
//$email = $_POST['forgotEmail'];
//
//$token = bin2hex(random_bytes(16));
//
//$token_hash = hash('sha256', $token);
//
//$expiry =date("Y-m-d H:i:s", time() + 60 * 30);
//
//$sql = "UPDATE users SET rest_token_hash = :token_hash,
//                 rest_token_expires_at = :token_expires_at
//             WHERE email = :email";
//$stmt = $pdo->prepare($sql);
//$stmt->bindParam(':email', $email);
//$stmt->bindParam(':token_hash', $token_hash);
//$stmt->bindParam(':token_expires_at', $expiry);
//$stmt->execute();

