<?php
class Feed 
{
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function feedback($data)
    {
        $this->db->query('INSERT INTO feedbacks (date, name, subject, feedback) VALUES(:date, :name, :subject, :feedback)');

        //Bind values
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':subject', $data['subject']);
        $this->db->bind(':feedback', $data['feedback']);

        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function journal($data)
    {
        $this->db->query('INSERT INTO journals (username, date, journalName, counsellorName, journal) VALUES(:username, :date, :journalName, :counsellorName, :journal)');

        //Bind values
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':date', $data['date']);
        $this->db->bind(':journalName', $data['journalName']);
        $this->db->bind(':counsellorName', $data['counsellorName']);
        $this->db->bind(':journal', $data['journal']);

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