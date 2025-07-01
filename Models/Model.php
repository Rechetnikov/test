<?php
namespace Models;

use mysqli;

class Model {
    private $connect;

    /**
     * @return void
     */
    public function __construct() {
        $this->connect = self::dbСonnect();
    }

    /**
     *
     * @return mysqli
     */
    private static function dbСonnect(): mysqli
    {
        $server_name = "localhost";
        $user_name = "root";
        $password = "root";
        $db_name = "test";

        $connect = mysqli_connect($server_name, $user_name, $password, $db_name);

        if(!$connect) {
            die("Connection fail");
        }

        mysqli_set_charset($connect, "utf8");

        return $connect;
    }

    /**
     * @param string
     * @return array
     */
    public function query(string $table): array
    {
        $sql = "SELECT * FROM `$table`";

        $result = mysqli_query($this->connect, $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $rows;
    }
}
