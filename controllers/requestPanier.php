<?php
session_start();
var_dump($_POST);
$_SESSION['basket'] = $_SESSION['basket']+1;
header('Location: /shop.php');