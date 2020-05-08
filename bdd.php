<?php 

$db = new PDO ('mysql:host=localhost;dbname=calendrier;charset=utf8', 'root', '');

$req = $db->prepare('SELECT * FROM calendrier');
$req->execute();
$result = $req->fetchAll(PDO::FETCH_OBJ);


echo json_encode($result);
