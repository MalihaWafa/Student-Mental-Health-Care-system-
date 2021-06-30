<?php
//By G A Rubayat Hyder
//A17CS5335

class Checkins extends Controller{                     //This calls in various pages like an anchor call
    public function __construct()
    {
        $this->checkinModel = $this->model('Checkin');
    }

    
    public function mood()                         //Finds the url name from the Core, then executes the function in the main Controller.php superclass
    {
        $data = [
            'username' => '',
            'date' => '',
            'mood' => '',
            'errorMessage' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                'username' => trim($_SESSION['username']),
                'date' => date("y/m/d"),
                'mood' => trim($_POST['mood']),
                'errorMessage' => ''
            ];

            
            if(empty($data['username']))
            {
                $data['errorMessage'] = 'Please login and try again';
            }


            if (empty($data['errorMessage']))
            {
                if($this->checkinModel->findMoodbyDate($data['username'], $data['date']))
                {
                    if($this->checkinModel->updateMood($data))
                    {
                        //if user info is entered, redirect to the checkin page
                        header('location: ' . URLROOT . '/pages/checkin');
                    }
                }
                else if($this->checkinModel->mood($data))
                {
                    //if user info is entered, redirect to the checkin page
                    header('location: ' . URLROOT . '/pages/checkin');
                }
                else
                {
                    die('Something went wrong');
                }
            }

            
            
        }

        $this->view('checkins/mood', $data);
    }





    public function thought()
    {

        $data = [
            'username' => '',
            'date' => '',
            'thought1' => '',
            'thought2' => '',
            'thought3' => '',
            'thought4' => '',
            'thought5' => '',
            'nullError' => '',
            'errorMessage' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
            'username' => trim($_SESSION['username']),
            'date' => date("y/m/d"),
            'thought1' => trim($_POST['thought1']),
            'thought2' => trim($_POST['thought2']),
            'thought3' => trim($_POST['thought3']),
            'thought4' => trim($_POST['thought4']),
            'thought5' => trim($_POST['thought5']),
            'nullError' => '',
            'errorMessage' => ''
            ];
        
            if(empty($data['thought1']) && empty($data['thought2']) && empty($data['thought3']) && empty($data['thought4']) && empty($data['thought5']))
            {
                $data['nullError'] = 'Please try to fill up at least one of the boxes before submitting';
            }

            if(empty($data['username']))
            {
                $data['errorMessage'] = 'Please login and try again';
            }

            if(empty($data['nullError']) && empty($data['errorMessage']))
            {
                if($this->checkinModel->findThoughtbyDate($data['username'], $data['date']))
                {
                    if($this->checkinModel->updateThought($data))
                    {
                        //if user info is entered, redirect to the checkin page
                        header('location: ' . URLROOT . '/pages/checkin');
                    }
                }
                else if($this->checkinModel->thought($data))
                {
                    //Redirect to checkin page on success
                    header('location: ' . URLROOT . '/pages/checkin');
                }
                else
                {
                    die('Something went wrong');
                }
            }
            
        
        
        
        
        
        
        
        
        }

        $this->view('checkins/thought', $data);
    }

    public function videoJournal()
    {
        $data = [
            'username' => '',
            'date' => '',
            'vidKey' => '',
            'nullError' => '',
            'errorMessage' => ''

        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => trim($_SESSION['username']),
                'date' => date("y/m/d"),
                'vidKey' => trim($_POST['video']),
                'nullError' => '',
                'errorMessage' => ''
            ];

            $data['vidKey'] = preg_replace("#.*youtube\.com/watch\?v=#" , "", $data['vidKey']);

            if(empty($data['vidKey']))
            {
                $data['nullError'] = 'Please fill in the video video url before submitting';
            }

            if(empty($data['username']))
            {
                $data['errorMessage'] = 'Please login and try again';
            }

            if(empty($data['nullError']) && empty($data['errorMessage']))
            {
                if($this->checkinModel->videoJournal($data))
                {
                    //Redirect to checkin page on success
                    header('location: ' . URLROOT . '/pages/checkin');
                }
                else
                {
                    die('Something Went wrong. Could not upload video.');
                }
            }
        }


        $this->view('checkins/videoJournal', $data);
    }
    
    
    public function test()
    {
        $this->view('checkins/test');
    }

    public function result()
    {
        $this->view('checkins/result');
    }

    
}