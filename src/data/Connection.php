<?php

namespace StudentsApp\Data;

use mysqli;

class Connection 
{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    public function __construct()
    {
        $this->servername = 'localhost';
        $this->username = 'root';
        $this->password = '';
        $this->dbname = 'school';
    }

    protected function conn()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        return $conn;
    }
}