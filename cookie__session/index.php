<?php
//session_start();
setcookie("name", $_POST['name'], time() -60);
setcookie("email", $_POST['email'], time() -60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/action.php" method="post">
    Name
    <input type="text" name="name"><br>
    Email
    <input type="text" name="email"><br>
    <button type="submit">Done</button>
</form>
<?php
//session_destroy();
//if ($_SESSION['name'] != "" && $_SESSION['email'] != '') {
//    echo 'User Name: ' . $_SESSION ['name'] . '<br>';
//    echo 'User Email: ' . $_SESSION ['email'] . '<br>';
//}

if ($_COOKIE['name'] != "" && $_COOKIE['email'] != '') {
    echo 'User Name: ' . $_COOKIE ['name'] . '<br>';
    echo 'User Email: ' . $_COOKIE ['email'] . '<br>';
}
?>
</body>
</html>