<?php

$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
$password = trim(filter_var($_POST['password'], FILTER_SANITIZE_STRING));
$re_password = trim(filter_var($_POST['re_password'], FILTER_SANITIZE_STRING));
$done = 'All done successful';
$error = '';

if (strlen($email) <=3){
    $error = 'please re enter email';
}else if (strlen($password) <=3){
    $error = 'please re enter password';
}else if (strlen($re_password) <=3) {
    $error = 'please re enter second input password';
}else if (!($password == $re_password)){
    $error = 'different password input';

}
$hash = "asdgdAfh12453fgWj5Sd44o345D4k534dj";
$key_password = md5($password . $hash);

include '../config/Database.php';
$pdo = new Database();
include '../models/Users.php';
$user = new Users($email, $key_password);
$pdo->insertNewUserInDatabase($pdo->getConnection(), $user);

echo $done;