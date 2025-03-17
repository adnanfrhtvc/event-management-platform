<?php
class Database {
    private static $dbHost = "localhost";
    private static $dbPort = "3307"; // Change from 3306 to 3307
    private static $dbName = "event_management"; // Your database name
    private static $dbUser = "root"; // Default XAMPP user
    private static $dbPass = ""; // Leave empty if no password

    public static function connect() {
        try {
            $pdo = new PDO("mysql:host=".self::$dbHost.";port=".self::$dbPort.";dbname=".self::$dbName.";charset=utf8", self::$dbUser, self::$dbPass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }
}
?>
