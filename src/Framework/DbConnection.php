<?php
declare(strict_types=1);

namespace movies\Framework;

use PDO;

class DbConnection
{
    private static ?DbConnection $instance = null;
    private PDO $conn;

    private string $host = 'localhost';
    private string $user = 'root';
    private string $pass = '';
    private string $name = 'film_rental';
    private int $port = 3306;

    private function __construct()
    {
        $this->conn = new PDO("mysql:host=$this->host:$this->port;
        dbname=$this->name", $this->user, $this->pass,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],);
    }

    public static function getInstance(): ?DbConnection
    {
        if (!self::$instance) {
            self::$instance = new DbConnection();
        }

        return self::$instance;
    }

    public function getConnection(): PDO
    {
        return $this->conn;
    }
}