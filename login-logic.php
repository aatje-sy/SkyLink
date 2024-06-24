<?php
session_start();
require_once('connect.php');
/**
 * @var $pdo ;
 */

//login logic
if (isset($_POST["loginSubmit"])) {
    $loginEmail = $_POST["loginEmail"];
    $loginPassword = $_POST["loginPassword"];
    $sqlLogin = "SELECT * FROM users WHERE email = :email ";
    $stmt = $pdo->prepare($sqlLogin);
    $stmt->bindParam(':email', $loginEmail);
    $stmt->execute();
    $fetchLogin = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($fetchLogin) {
        if (password_verify($loginPassword, $fetchLogin['password'])) {
            $_SESSION["loggedUser"] = $fetchLogin['name'];
            $_SESSION["bookerID"] = $fetchLogin['id'];
            if ($fetchLogin['admin'] == 1) {
                $_SESSION["admin_is_logged"] = true;
                header("Location: admin-panel.php");
            } else if ($fetchLogin['admin'] == 0) {
                $_SESSION["admin_logged_out"] = false;
                header("Location: user.php");
            }
            exit;
        } else {
            echo "Wrong password";
        }
    } else {
        echo "This email does not exist";
    }
}




//register logic
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['repeat_password'];
    //    password security
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $errors = array();
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($passwordRepeat)) {
        array_push($errors, "All Fields are required");
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "Please enter a valid email address");
    }
    if (strlen($password) < 6) {
        array_push($errors, "Password must be at least 6 characters long");
    }
    if ($password != $passwordRepeat) {
        array_push($errors, "Passwords do not match");
    }

    $sqlDoubleEmail = "SELECT email FROM users WHERE email = '$email'";
    $resultDoubleEmail = $pdo->query($sqlDoubleEmail);
    $rowDoubleEmail = $resultDoubleEmail->fetch(PDO::FETCH_ASSOC);
    if ($rowDoubleEmail > 0) {
        array_push($errors, "Email already exists");
    }
    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo $error . "<br/>";
        }
    } else {
// de gebruiker wordt toegevoegd aan de database
        $sql = "INSERT INTO users (name, lastName, email, password) VALUES (:name, :lastName, :email, :password)";
        $stmt = $pdo->prepare($sql);
        if ($stmt) {
            $stmt->bindParam(":name", $firstname, PDO::PARAM_STR);
            $stmt->bindParam(":lastName", $lastname, PDO::PARAM_STR);
            $stmt->bindParam(":email", $email, PDO::PARAM_STR);
            $stmt->bindParam(":password", $passwordHash, PDO::PARAM_STR);
            $stmt->execute();
            echo "New record created successfully";
        } else {
            die("something went wrong");
        }

    }
}
?>
