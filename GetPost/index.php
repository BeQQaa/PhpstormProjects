<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/check.php" method="post">
    <label for="name">Name</label>
    <input type="text" name="name"><br>
    <label for="email">Email</label>
    <input type="email" name="email"><br>
    <button type="submit">Submit</button>
</form>

<form action="/check.php" method="get">
<label for="g-name">Name</label>
<input type="text" name="g-name"><br>
<label for="g-email">Email</label>
<input type="email" name="g-email"><br>
<button type="submit">Submit</button>
</form>
<?php
//if ($_POST['name'] == "") {
//    echo 'empty name'.'<br>';
//} else {
//    echo $_POST['name'] . '<br>';
//}
//if ($_POST['name'] == "") {
//    echo 'empty email'.'<br>';
//} else {
//    echo $_POST['email'] . '<br>';
//}
//
//echo $_GET['g-name'].'<br>';
//echo $_GET['g-email'].'<br>';

?>
</body>
</html>