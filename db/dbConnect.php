<?php

namespace DB;

use mysqli;

class dbConnect
{
    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "982104snikkir";
    private string $BDname = "database";

    public function createMySQL(): mysqli|null
    {
        $mysqli = new mysqli($this->servername, $this->username, $this->password, $this->BDname);
        if ($mysqli->connect_error)
        {
            printf("Соединение не удалось: %s\n", $mysqli->connect_error);
            exit();
        }
        return $mysqli;
    }


}