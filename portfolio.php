<?php
include "./connection.php"; 

if (isset($_POST["Name"])) {
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $subject = $_POST["Subject"];
    $message = $_POST["Message"];


    $users = $connect->prepare("
        INSERT INTO portfolio_users (Full_Name, Email, Subject, Message)
        VALUES (?, ?, ?, ?)
    ");

    $result = $users->execute([$name, $email, $subject, $message]);
}


header("Location: index.html");
exit;
?>
