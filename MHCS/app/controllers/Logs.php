<?php
//By G A Rubayat Hyder
//A17CS5335

class Logs extends Controller
{
    public function __construct()
    {
        $this->logModel = $this->model('Log');
    }

    public function thoughtLog()
    {
        $data = [
            'username' => trim($_SESSION['username']),
            'thoughts' => ''
            
        ];
        //Storing all available thoughts
        $thoughts = $this->logModel->getThoughts($data['username']);

        $data = [
            'username' => trim($_SESSION['username']),
            'thoughts' => $thoughts
            
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->logModel->deleteThoughts($data['username']))
            {
                header('location: ' . URLROOT . '/pages/checkIn');
            }
            else
            {
                die('Something went wrong, Could not delete data.');
            }
        }


        $this->view('logs/thoughtLog', $data);
    }

    public function moodLog()
    {
        $data = [
            'username' => trim($_SESSION['username']),
            'moods' => ''
        ];

        $moods = $this->logModel->getMoods($data['username']);

        $data = [
            'username' => trim($_SESSION['username']),
            'moods' => $moods
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->logModel->deleteMoods($data['username']))
            {
                header('location: ' . URLROOT . '/pages/checkIn');
            }
            else
            {
                die('Something went wrong, Could not delete data.');
            }
        }

        $this->view('logs/moodLog', json_encode($data));
    }
}