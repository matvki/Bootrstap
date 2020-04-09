<?php
if (isset($_POST['leaf'])) {
    $type = $_POST['leaf'];
    $user = "root";
    $password = "0000";
    $bdd = new PDO("mysql:host=localhost;dbname=Tree-Factorie;charset=utf8", $user, $password);
    
    $request = $bdd->prepare('SELECT * FROM trees where leaf like :idtype');
    $request->bindParam(':idtype', $type);
    $request->execute();
    $trees = $request->fetchall(PDO::FETCH_ASSOC);
}
if (isset($_POST['fruit'])) {
    $type = $_POST['fruit'];
    $user = "root";
    $password = "0000";
    $bdd = new PDO("mysql:host=localhost;dbname=Tree-Factorie;charset=utf8", $user, $password);
    
    $request = $bdd->prepare('SELECT * FROM trees where fType like :idtype');
    $request->bindParam(':idtype', $type);
    $request->execute();
    $trees = $request->fetchall(PDO::FETCH_ASSOC);
}