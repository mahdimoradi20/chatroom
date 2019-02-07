<?php
session_start();

$con = mysqli_connect('localhost', 'root' , '', 'mahdi');

$query = "insert into chats (strings) values (' " . '<b>' . $_SESSION['user'] . '</b>' .  ":" .  $_POST['txtsend'] ."')";

mysqli_query($con,$query);

header('location:main.php');

mysqli_close($con);

?>