<?php
if ($_POST["text"] != "") {
   $text = $_POST["text"];
   $connection = new PDO("mysql:host=localhost;dbname=mydb;charset=utf8", 'root', 'root');
   $statement = $connection->prepare("INSERT INTO `data` (`text`) VALUES ('$text')");
   $statement->execute();
}
header('Location: ./task_9.php');