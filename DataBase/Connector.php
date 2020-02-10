<?php

require_once "Config.php";

class Connector {
    private $link;

    public function __construct()
    {
        $this->link = new mysqli(Config::HOST, Config::USER, Config::PASSWORD, Config::DB);
        $this->check_conn();
    }

    public function execute($stmt)
    {
        $this->link->query($stmt);
        $this->link->close();
    }

    private function check_conn()
    {
        if (mysqli_connect_errno()) {
            printf("Connect failed: %s\n", mysqli_connect_error());
            exit();
        }
    }
}