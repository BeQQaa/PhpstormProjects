<?php
header('Location: /');
//exit();
//die();
if ($_POST['name'] == "") {
    echo 'empty name' . '<br>';
} else {
    echo $_POST['name'] . '<br>';
}
if ($_POST['name'] == "") {
    echo 'empty email' . '<br>';
} else {
    echo $_POST['email'] . '<br>';
}

echo $_GET['g-name'] . '<br>';
echo $_GET['g-email'] . '<br>';
//die();
//exit();