<?php


class Database
{
    public function __construct()
    {
    }

    private $host = "localhost";
    private $db_name = "test_db";
    private $username = "admin";
    private $password = "*Loksy6af3z13";
    private $dsn;
    public $connection;

    /**
     * @return mixed
     */
    public function getConnection()
    {
        $this->connection = null;
        $dsn = 'mysql:host=' . $this->host . ';dbname='. $this->db_name;

        try {
            $this->connection = new PDO($dsn, $this->username, $this->password);
        }catch (PDOException $exception){
            exit();
        }
        return $this->connection;
    }

    public function insertNewUserInDatabase(PDO $connection, Users $users){
        $sql = 'INSERT INTO users(email, password) VALUES (?, ?)';
        $query = $connection->prepare($sql);
        $query->execute([$users->getEmail(), $users->getPassword()]);
    }
}