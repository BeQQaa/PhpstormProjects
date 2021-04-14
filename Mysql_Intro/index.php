<!--phpinfo();-->

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

$query = $pdo->query('SELECT * FROM `users`');
//while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
//    echo '<h1>' . $row['login'] . '</h1><p><b>Email:</b> ' . $row['email'] . '</p><br>';
//}
//while ($row = $query->fetch(PDO::FETCH_OBJ)) {
//    echo '<h1>' . $row['login'] .
//        '</h1><p><b>Email:</b> ' . $row->email . '</p><br>' .
//        '</h1><p><b>Name:</b> ' . $row->name . '</p><br>' .
//        '</h1><p><b>Surname:</b> ' . $row->surname . '</p><br>';
//}
$name = 'Oleg';
$surname = 'BeQQaa';
$sql_get_from_users_by_name = 'SELECT `login`, `email`, `name`, `surname` FROM `users` WHERE `name` = :name && `surname` = :surname'; /* or `name` = ?*/
$query = $pdo ->prepare($sql_get_from_users_by_name);
$query->execute(['name'=> $name, 'surname'=>$surname] ); /* or [$name]*/
$users = $query->fetchAll(PDO::FETCH_OBJ);

foreach ($users as $user){
    echo
        '<h1>' . $user->login . '</h1>' .
        '<p><b>Email:</b> ' . $user->email . '</p><br>' .
        '<p><b>Name:</b> ' . $user->name . '</p><br>' .
        '<p><b>Surname:</b> ' . $user->surname . '</p><br>';
}


?>
</body>
</html>
