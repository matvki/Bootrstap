<?php
session_start();
var_dump($_POST);
if (!isset($_SESSION['name'])) {
    $_SESSION['noName'] = 'couocou';
    header('Location: /shop.php');die;
} else {
    $_SESSION['basket'] = $_SESSION['basket'] + 1;
    if (isset($_SESSION['shop'])) {
        foreach ($_SESSION['shop'] as $id) {
            if ($id = $_POST['id']) {
                $_SESSION['shop'][$id]['qtt'] = $_SESSION['shop'][$id]['qtt'] + 1;
                var_dump($id);
                header('Location: /shop.php');
                die;
            }
        }
    }
    $_SESSION['shop'][$_POST['id']]['qtt'] = 1;
    header('Location: /shop.php');
    die;
}
