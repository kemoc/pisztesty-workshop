<?php

class UserRepository
{
    private $pdo;

    public function __construct()
    {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];

        $user = 'root';
        $password = 'password';
        $dsn = 'mysql:host=localhost;dbname=pisztesty_workshop;charset=utf8mb4';
        $this->pdo = new PDO($dsn, $user, $password, $options);
    }

    public function getById(int $id) : array
    {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    }
}
