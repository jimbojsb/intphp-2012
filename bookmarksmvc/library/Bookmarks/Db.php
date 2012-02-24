<?php
class Bookmarks_Db
{
    /**
     * @var PDO
     */
    protected static $conn;

    /**
     * @static
     * @param $hostname
     * @param $username
     * @param $password
     * @param $database
     */
    public static function init($hostname, $username, $password, $database)
    {
        $p = new \PDO("mysql:host=$hostname;dbname=$database", $username, $password);
        self::$conn = $p;
    }

    /**
     * @static
     * @param $sql string of SQL to execute
     * @param array $params array of params in the order of the ?'s with in the SQL statement
     * @return array an array of arrays which reperesent the SQL result set
     */
    public static function query($sql, $params = array())
    {
        if ($params && !is_array($params)) {
            $params = array($params);
        }

        $stmt = self::$conn->prepare($sql);
        $stmt->execute($params);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $results = array();
        while ($resultRow = $stmt->fetch()) {
            $results[] = $resultRow;
        }
        return $results;
    }
}