<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$user = 'admin';
$password = '*Loksy6af3z13';
$db = 'test_db';
$host = 'localhost';

$dsn = 'mysql:host=' . $host . ';dbname=' . $db;
$pdo = new PDO($dsn, $user, $password);
//
//$login = 'codi999';
//$email = 'teste@test.com';
//$name = 'Paul';
//$surname = 'Garman';
//
//$sql = 'INSERT INTO users(`login`, `email`, `name`, `surname`) VALUES (:login, :email, :name, :surname)';
//$query = $pdo->prepare($sql);
//$query->execute(['login' => $login, 'email' => $email, 'name' => $name, 'surname' => $surname])

//$id = 4;
//$login = 'SmurfHerdOrNerd';
//$email = 'SmurfHerdOrNerd@gmail.com';
//$sql = 'UPDATE `users` SET `login` = :login, `email` = :email WHERE `id` = :id';
//$query = $pdo->prepare($sql);
//$query->execute(['login'=>$login, 'id'=>$id, 'email'=>$email]);

//$id = 3;
//$sql = 'DELETE FROM `users` where `id` = :id';
//$query = $pdo->prepare($sql);
//$query->execute(['id'=>$id]);
?>
</body>
</html>