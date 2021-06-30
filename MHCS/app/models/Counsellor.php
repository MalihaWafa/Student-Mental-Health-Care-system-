<?php
//By G A Rubayat Hyder
//A17CS5335

    class Counsellor                                                            //Models Singular, Controllers Plural
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        //This is where the actual registration happens. This is where the query is called to insert data into the database
        public function register($data)
        {
            //Insert query prepared statement
            $this->db->query('INSERT INTO counsellors (username, email, password) VALUES(:username, :email, :password)');
            
            //Bind Values
            $this->db->bind(':username', $data['username']);
            $this->db->bind(':email', $data['email']);
            $this->db->bind(':password', $data['password']);

            //Execute funtion
            if($this->db->execute())
            {
                return true;
            }
            else
            {
                return false;
            }
        }


        public function login($username, $password)
        {
            $this->db->query('SELECT * FROM counsellors WHERE username = :username');

            //Bind value
            $this->db->bind(':username', $username);

            //Returns a single row of where the username exists in the database, and then stops checking. This row is stored inside the $row variable
            $row = $this->db->single();

            //Singular value of password is stored inside $hashedPassword from the row variable
            $hashedPassword = $row->password;

            //Check for password
            if(password_verify($password, $hashedPassword))
            {
                return $row;
            }
            else
            {
                return false;
            }
        }

        
        //This method is used to find user by email. Email is passed in by the controllers (one example is the one used in Users.php register method)
        public function findUserbyEmail($email)
        {
            //This is a prepared statement 
            $this->db->query('SELECT * FROM counsellors WHERE email = :email');

            //Email param is binded with the email variable
            $this->db->bind(':email', $email);

            //Check if email is registered
            if($this->db->rowCount() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function findUserbyName($username)
        {
            //This is a prepared statement 
            $this->db->query('SELECT * FROM counsellors WHERE username = :username');

            //Username param is binded with the username variable
            $this->db->bind(':username', $username);

            //Check if email is registered
            if($this->db->rowCount() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        


    }