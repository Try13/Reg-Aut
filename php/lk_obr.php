<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
$mysqli = mysqli_connect("localhost", "fbclzoje_0755", "0755", "fbclzoje_0755");
if ($mysqli == false) {
  print("error");
} else {
  $inputValue = $_POST["value"];
  $item = $_POST["item"];
  $id = $_SESSION["id"];
  $mysqli->query("UPDATE `users` SET `$item`='$inputValue' WHERE `id`='$id'");
  $_SESSION[$item] = $inputValue;
}
