<?php
$connexion = new PDO('mysql:dbname=calendrier;host=localhost;charset=utf8', 'root', '');

if (!empty($_POST['email']) &&
    !empty($_POST['password']) &&
    filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

    $db = $connexion->prepare('INSERT INTO users(email, password)
                                    VALUES(:email, :password)');

    $db->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
    $db->bindValue(':password', $_POST['password'], PDO::PARAM_STR);

    $db->execute();

    header('Location: ../index.html');

}else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
