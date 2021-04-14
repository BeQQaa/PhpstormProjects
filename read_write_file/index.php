<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="/write.php" method="post">
    <textarea name="message" rows="8" cols="80"></textarea><br>
    <button type="submit">Send</button>
</form>
<?php
//$file = fopen('data/data.txt', 'r');
//echo fread($file, 100);
//fclose($file);
// bad idea need to close
echo file_get_contents('data/data.txt') . "<br>";
//file_put_contents('data/data.txt', 'Testing')
echo file_exists('data/data.txt')  . '<br>';
echo filesize('data/data.txt'). '<br>';

//rename('data/data.txt', 'data/new_data'); rename
//unlink ('data/data.txt'); delete
?>
</body>
</html>