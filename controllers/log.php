<?php
session_start();

$user = "root";
$password = "0000";
$bdd = new PDO("mysql:host=localhost;dbname=Tree-Factorie;charset=utf8", $user, $password);
$request = $bdd->prepare('SELECT * FROM users');
$request->execute();
$users = $request->fetchall(PDO::FETCH_ASSOC);
$name = strtolower($_POST['name']);
$tryPass = md5("Tree".$_POST['password']."Factorie");

foreach ($users as $user) {
    if ((strtolower($user['name']) == $name) && ($user['password'] == $tryPass)) {
        $_SESSION['name'] = $user['name'];
        $_SESSION['basket'] = 0;
        header('Location: /');die;
    }
}
$_SESSION['wrongPass'] = '1';
header('Location: /connexion.php');die;
