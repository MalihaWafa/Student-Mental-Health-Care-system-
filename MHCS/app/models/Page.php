<?php

class Page {

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getInfo($username)
    {
        
        $this->db->query('SELECT * FROM users WHERE username = :username');

        //Bind username
        $this->db->bind(':username', $username);

        $result = $this->db->resultSet();

        return $result;
    }
}