<?php
class Feeds extends Controller
{
    public function __construct()
    {
        $this->feedModel = $this->model('Feed');
    }


    public function feedback()
    {
        $data = [
            'date' => '',
            'name' => '',
            'subject' => '',
            'feedback' => '',
            'nullError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {

            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'date' => date("y/m/d"),
                'name' => trim($_POST['name']),
                'subject' => trim($_POST['subject']),
                'feedback' => trim($_POST['feedback']),
                'nullError' => ''
            ];
            

            //Validate password
            if (empty($data['feedback'])) {
                $data['nullError'] = 'Please try to write something in your feedback before submission.';
            }

            //Check if all errors are empty
            if (empty($data['nullError'])) {
                
                if($this->feedModel->feedback($data))
                {
                    //if user info is entered, redirect to the checkin page
                    header('location: ' . URLROOT . '/pages/home');
                }
                else
                {
                    die('Something Went Wrong, Please try again');
                }
            }

        }

        $this->view('pages/feedback', $data);
    }


    public function journal()
    {
        $data = [
            'username' => trim($_SESSION['username']),
            'date' => '',
            'journalName' => '',
            'counsellorName' => '',
            'journal' => '',
            'nullError' => ''
        ];

        //Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST') 
        {

            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_SESSION['username']),
                'date' => date("y/m/d"),
                'journalName' => trim($_POST['journalName']),
                'counsellorName' => trim($_POST['counsellorName']),
                'journal' => trim($_POST['journal']),
                'nullError' => ''
            ];
            

            //Validate password
            if (empty($data['journal'])) {
                $data['nullError'] = 'Please try to write something in your journal before submission.';
            }

            //Check if all errors are empty
            if (empty($data['nullError'])) {
                
                if($this->feedModel->journal($data))
                {
                    //if user info is entered, redirect to the checkin page
                    header('location: ' . URLROOT . '/pages/home');
                }
                else
                {
                    die('Something Went Wrong, Please try again');
                }
            }

        }

        $this->view('pages/journal', $data);
    }
}