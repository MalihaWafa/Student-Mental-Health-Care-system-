<?php
//By G A Rubayat Hyder
//A17CS5335

class Pages extends Controller{                     //This calls in various pages like an anchor call
    public function __construct()
    {
        $this->pageModel = $this->model('Page');
    }

    
    public function index()                         //Finds the url name from the Core, then executes the function in the main Controller.php superclass
    {
        // $users = $this->userModel->getUsers();

        // $data = [
        //     'title' => 'HomePage',
        //     'users' => $users
        // ];
        $this->view('pages/index');
    }

    public function home()
    {
        $this->view('pages/home');
    }

    public function counsellorHome()
    {
        $this->view('pages/counsellorHome');
    }

    public function checkIn()
    {
        $this->view('pages/checkIn');
    }
    
    public function history()
    {
        $this->view('pages/history');
    }

    public function showProfile()
    {
        $data = [
            'username' => trim($_SESSION['username']),
            'info' => ''
        ];

        //Storing all available thoughts
        $info = $this->pageModel->getInfo($data['username']);

        $data = [
            'username' => trim($_SESSION['username']),
            'info' => $info
            
        ];

        $this->view('pages/showProfile', $data);
    }

    public function about()
    {
        echo "About";
    }
}