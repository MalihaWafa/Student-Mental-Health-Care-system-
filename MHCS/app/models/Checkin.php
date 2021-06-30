<?php
//By G A Rubayat Hyder
//A17CS5335

class Checkin{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function mood($data)
    {
        $this->db->query('INSERT INTO moods (username, date, mood) VALUES(:username, :date, :mood)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':mood', $data['mood']);

        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function findMoodbyDate($username, $date)
    {
        $this->db->query('SELECT * FROM moods WHERE username = :username AND date = :date');

        //Bind values
        $this->db->bind(':username', $username);
        $this->db->bind(':date', $date);

        if($this->db->rowCount() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public function updateMood($data)
    {
        //Prepared Statement
        $this->db->query('UPDATE moods SET mood = :mood WHERE username = :username AND date = :date');

        //Bind values
        $this->db->bind('mood', $data['mood']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('date', $data['date']);

        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public function thought($data)
    {
        $this->db->query('INSERT INTO thoughts (username, date, thought1, thought2, thought3, thought4, thought5) VALUES(:username, :date, :thought1, :thought2, :thought3, :thought4, :thought5)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':thought1', $data['thought1']);
        $this->db->bind(':thought2', $data['thought2']);
        $this->db->bind(':thought3', $data['thought3']);
        $this->db->bind(':thought4', $data['thought4']);
        $this->db->bind(':thought5', $data['thought5']);

        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }


    public function findThoughtbyDate($username, $date)
    {
        $this->db->query('SELECT * FROM thoughts WHERE username = :username AND date = :date');

        //Bind values
        $this->db->bind(':username', $username);
        $this->db->bind(':date', $date);

        if($this->db->rowCount() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public function updateThought($data)
    {
        //Prepared Statement
        $this->db->query('UPDATE thoughts SET thought1 = :thought1, thought2 = :thought2, thought3 = :thought3, thought4 = :thought4, thought5 = :thought5 WHERE username = :username AND date = :date');

        //Bind values
        $this->db->bind('thought1', $data['thought1']);
        $this->db->bind('thought2', $data['thought2']);
        $this->db->bind('thought3', $data['thought3']);
        $this->db->bind('thought4', $data['thought4']);
        $this->db->bind('thought5', $data['thought5']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('date', $data['date']);

        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }

    }

    public function videoJournal($data)
    {
        //Prepared Statement
        $this->db->query('UPDATE thoughts SET vidKey = :vidKey WHERE username = :username AND date = :date');

        //Bind values
        $this->db->bind('vidKey', $data['vidKey']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('date', $data['date']);

        //Execute
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