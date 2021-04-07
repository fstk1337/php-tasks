<?php
session_start();

$text = $_POST["text"];
$connection = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", 'root', 'root');
$statement = $connection->prepare("SELECT * FROM `data` WHERE `text`=:text");
$statement->execute(['text' => $text]);
$result = $statement->fetch(PDO::FETCH_ASSOC);
if(!empty($result) || $text == "") {
    $alert = "You should check in on some of those fields below.";
    $_SESSION["alert"] = $alert;
} else {
    $statement = $connection->prepare("INSERT INTO `data` (`text`) VALUES (:text)");
    $statement->execute(['text' => $text]);
}
header('Location: ./task_10.php');