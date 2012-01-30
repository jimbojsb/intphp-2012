<?php
class Db
{
    /**
     * @var PDO
     */
    protected static $conn;

    public static function init($hostname, $username, $password, $database)
    {
        $p = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        self::$conn = $p;
    }

    public static function query($sql, $params = null)
    {
        $result = self::$conn->query($sql);
        return $result;
    }
}

Db::query("SELECT 1");
