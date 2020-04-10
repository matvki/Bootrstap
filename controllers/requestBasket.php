<?php
$arrayLenght = count($_SESSION['shop']);
$user = "root";
$password = "0000";
$bdd = new PDO("mysql:host=localhost;dbname=Tree-Factorie;charset=utf8", $user, $password);
$request = $bdd->prepare('SELECT * FROM trees where id like :id');
$request->bindParam(':id', $id);
$request->execute();
$tree = $request->fetchall(PDO::FETCH_ASSOC);