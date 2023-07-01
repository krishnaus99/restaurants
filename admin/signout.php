<?php
include 'connection.php';
session_start();
$id=$_SESSION['user'];
session_destroy();
session_unset();
header("location:home.php");
?>