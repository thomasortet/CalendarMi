<?php

var_dump($_POST);
$connexion = new PDO('mysql:dbname=calendrier;host=localhost;charset=utf8', 'root', '');

$delete = $connexion->prepare('DELETE FROM calendrier WHERE id=:id');

$delete->bindValue(':id', $_POST['id'], PDO::PARAM_INT);

$delete->execute();