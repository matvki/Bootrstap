<?php
session_start();
$pMDP = $_POST['password'];
$sMDP = $_POST['verifPass'];
$_SESSION['inscription']["email"] = $_POST['email'];
$_SESSION['inscription']["nom"] = $_POST['name'];
if ($pMDP != $sMDP) {
    $_SESSION['mdp'] = 'coucou';
    header('Location: /connexion.php');
} else {
    // recup d'info
    $name = strtolower($_POST['name']);
    $password = md5("Tree".$_POST['password']."Factorie");
    $mail = strtolower($_POST['email']);
    // operations
    $bdd = new PDO("mysql:host=localhost;dbname=Tree-Factorie;charset=utf8", 'root', '0000');
    $request = $bdd->prepare("INSERT INTO users (name,password,mail) VALUES (:name,:password,:mail)");

    $request->bindParam(':name', $name);
    $request->bindParam(':password', $password);
    $request->bindParam(':mail', $mail);

    $request->execute();
    $_SESSION['creat'] = 'coucou';
    header('Location: /connexion.php');
}
