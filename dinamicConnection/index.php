<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<header>
    Site Header
</header>
<?php
//require if error stop include on error continue require_once
include 'header.php';
echo 'Main piece of site';
require 'footer.php';
?>
<footer>Site Footer</footer>
</body>
</html>