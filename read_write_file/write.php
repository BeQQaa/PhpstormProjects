<?php
if ($_POST['message'] != "") {
    $mess = $_POST['message']. "\n";
    $file = fopen('data/data.txt', 'a+');
    fwrite($file, $mess);
    fclose($file);
}
header('Location: /');
exit();
