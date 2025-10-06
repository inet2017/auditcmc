<?php
require_once 'env.php';
cargarDotEnv(__DIR__ . '/../.env');

class Database {
    public static function connect() {
        $host = $_ENV['DB_HOST'];
        $dbname = $_ENV['DB_NAME'];
        $user = $_ENV['DB_USER'];
        $pass = $_ENV['DB_PASS'];

        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        return new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass, $options);
    }
}
