<?php
//By G A Rubayat Hyder
//A17CS5335

class Counsellors extends Controller{                         //This Controller class is for redirecting and authenticating login only as opposed to pages.
    public function __construct()
    {
        $this->userModel = $this->model('Counsellor');
    }

    //Register Functionality
    public function counsellorRegister()
    {
        $data = [
            'username' => '',
            'email' => '',
            'password' => '',
            'confirmPassword' => '',
            'usernameError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

        // The Start of the Form handling for login page upon clicking submit
        if($_SERVER['REQUEST_METHOD'] == 'POST')        //Check for POST
        {
            //Sanitize POST data (strips/encodes potentially harmful data for the application)
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);              //Returns false on returning scalar value

            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'usernameError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            //Username standards based on letters(a-z & A-Z) and Numbers(0-9) allowed
            $nameValidation = "/^[a-zA-Z0-9]*$/";
            //Password standards based on letters and numbers
            $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

            //Check if the username is empty or not, if empty, show error
            if(empty($data['username']))
            {
                $data['usernameError'] = 'Please Enter valid username';
            }
            elseif(!preg_match($nameValidation, $data['username']))                     //Check if username matches the naming standard set
            {
                $data['usernameError'] = 'Please Enter valid username. Name can only contain letters and numbers';
            }
            else                                                                        //Check if username exists
            {
                if($this->userModel->findUserbyName($data['username']))
                {
                    $data['usernameError'] = 'Username is already taken.';
                }
                
            }

            //Check if the email is empty or not, if empty, show error
            if(empty($data['email']))
            {
                $data['emailError'] = 'Please Enter valid email.';
            }
            elseif(!filter_var($data['email'], FILTER_VALIDATE_EMAIL))                  //Standard PDO method to check for standard email format
            {
                $data['emailError'] = 'Please enter the correct format.';
            }
            else                                                                        //Check if user email exists
            {
                if($this->userModel->findUserbyEmail($data['email']))
                {
                    $data['emailError'] = 'Email is already taken.';
                }
                
            }

        //PASSWORD
            //Validate Password on length and numeric values
            if(empty($data['password']))
            {
                $data['passwordError'] = 'Please enter a password';
            }
            else if(strlen($data['password']) < 9)
            {
                $data['passwordError'] = 'Password must be at least 8 characters and contain 1 number.';
            }
            else if(preg_match($passwordValidation, $data['password']))                 //Check if password matches the naming standard set. NOTICE: That it is an error if the syntax does match, as opposed to in username syntax
            {
                $data['passwordError'] = 'Please Enter valid Password. Password must contain at least one numeric value and be at least 8 characters.';
            }
            //Validate confirm Password
            if(empty($data['confirmPassword']))
            {
                $data['confirmPasswordError'] = 'Please confirm password';
            }
            else
            {                
                if ($data['password'] != $data['confirmPassword']) 
                {
                    $data['confirmPasswordError'] = 'Passwords do not match, Please Re-try.';
                }
            }

            //Check for all errors to be empty
            if(empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError']))
            {
                //Strong Password hashing algorithm for PHP
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register user from model function
                if($this->userModel->register($data))
                {
                    //Redirect user to the login page upon successful registration
                    header('location: ' . URLROOT . '/counsellors/counsellorLogin');
                }
                else
                {
                    die('Something went wrong. Unable to register. Please ensure you have proper internet connection and try again.');
                }
            }
        }  

        $this->view('users/counsellorRegister', $data);           //This is the redirect to the register page
    }



    public function counsellorLogin()
    {
        //Looks inside the models, finds data from the database and passes it inside the view
        $data = [
            'title' => 'Login Page',
            'username' => '',
            'password' => '',
            'usernameError' => '',                      //Sets the Username Error Message
            'passwordError' => ''                       //Sets the Password Error Message
        ];

        

        //Check for the POST
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Setting the data from the form to an assosiative array
            $data = [
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => '',
            ];


            //Validate Username
            if(empty($data['username']))
            {
                $data['usernameError'] = 'Please Enter a Username';
            }
            
            //Validate Password
            if(empty($data['password']))
            {
                $data['passwordError'] = 'Please Enter Valid Password';
            }

            ////Check if all errors are empty
            if(empty($data['usernameError']) && empty($data['passwordError']))
            {
                //New variable loggedInUser, this stores the user row from the database 
                //as per what is provided by the login method in User model
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                //If loggedInUser is true/ has a value, create user session, else show error message and re-load page
                if($loggedInUser)
                {
                    $this->createUserSession($loggedInUser);
                    
                }
                else
                {
                    $data['passwordError'] = 'Password/Username is incorrect. Please Try Again.';

                    $this->view('counsellors/counsellorLogin', $data);
                }
            }


        }
        else
        {
                $data = [                                       //Looks inside the models, finds data from the database and passes it inside the view
                    'username' => '',
                    'password' => '',
                    'email' => '',
                    'usernameError' => '',                      //Sets the Username Error Message
                    'passwordError' => ''                       //Sets the Password Error Message
                ];
        }

        $this->view('users/counsellorLogin', $data);              //This is the redirect to the login page
    }

    //Metod for creating user session on logging in
    public function createUserSession($user)
    {
        
        $_SESSION['user_id'] = $user->id;
        $_SESSION['username'] = $user->username;                //This is now officially what we need to access the session username
        $_SESSION['email'] = $user->email;
        header('location:' . URLROOT . '/pages/counsellorHome');
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['username']);
        unset($_SESSION['email']);
        header('location:' . URLROOT . '/counsellors/counsellorLogin');
    }
    
}