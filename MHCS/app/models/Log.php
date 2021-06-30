<?php
//By G A Rubayat Hyder
//A17CS5335

class Log
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getThoughts($username)
    {
        
        $this->db->query('SELECT * FROM thoughts WHERE username = :username');

        //Bind username
        $this->db->bind(':username', $username);

        $result = $this->db->resultSet();

        return $result;
    }

    public function getMoods($username)
    {
        $this->db->query('SELECT * FROM moods WHERE username = :username');

        //Bind username
        $this->db->bind(':username', $username);

        $result = $this->db->resultSet();

        return $result;
    }

    public function deleteThoughts($username)
    {
        $this->db->query('DELETE FROM thoughts WHERE username = :username');

        //Bind username
        $this->db->bind(':username', $username);

        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteMoods($username)
    {
        $this->db->query('DELETE FROM moods WHERE username = :username');

        //Bind username
        $this->db->bind(':username', $username);

        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }











}