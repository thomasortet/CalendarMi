<?php
$connexion = new PDO('mysql:dbname=calendrier;host=localhost;charset=utf8', 'root', '');

$add = $connexion->prepare('INSERT INTO calendrier (start, end, title, description)
                                        VALUES (:start, :end, :title, :description)');

$add->bindValue(':start', $_POST['start'], PDO::PARAM_STR);
$add->bindValue(':end', $_POST['end'], PDO::PARAM_STR);
$add->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
$add->bindValue(':description', $_POST['description'], PDO::PARAM_STR);

json_encode($add);

$add->execute();

echo '<pre>';
var_dump($_POST);
echo '</pre>';