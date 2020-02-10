<?php 

require_once "Connector.php";

class DbController {
    
    public function select()
    {
        $conn = new Connector;
    }

    public function insertHistory($name, $money_changed)
    {
        $conn = new Connector;
        $conn->execute("INSERT INTO History (name, money_changed) VALUES ($name, $money_changed)");
    }

    public function update()
    {
        $conn = new Connector;
    }
}