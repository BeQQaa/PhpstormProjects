<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

class User
{
    const PASS = 'const_password';
    public $name;
    private $surName = 'null';
    private $email;
    private $login;
    private $pass;

    function __destruct()
    {
        print 'Delete' . __CLASS__ . '<br>';
        // TODO: Implement __destruct() method.
    }

    function __construct($name, $surName, $login, $pass)
    {
        $this->name = $name;
        $this->surName = $surName;
        $this->login = $login;
        $this->pass = $pass;
    }

    function showAll($name)
    {
        echo $name . ', '. $this->surName;
    }

    function showName()
    {
        echo $this-> $name;
    }

    function getSurname(){
       return $this->surName;
    }
    function setSurname($surname){
        $this->surName = $surname;
    }

}

$admin = new User('mark', 'fordon', 'qwrwets', 'lsdgorg');
$admin->name = 'John';
$admin->showAll($admin->name);
echo '<br>';
$admin->showName();
$admin->setSurname("Gordon");
$val = $admin->getSurname();
echo $val;
echo '<br>';

echo User::PASS;
echo '<br>';

$default = new User('asd', 'er32', 'zzxxxz', 'lsdgorbnvbng');
$default->name = "Mark";
echo $default->name;

?>
</body>
</html>