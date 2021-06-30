<?php
//By G A Rubayat Hyder
//A17CS5335

    //Establishing Database Connections
    class Database
    {
        private $dbHost = DB_HOST;
        private $dbUser = DB_USER;
        private $dbPass = DB_PASS;
        private $dbName = DB_NAME;
        
        private $statement;                     //Prepares Statement
        private $dbHandler;                     //Whenever we prepare a statemment we use this
        private $error;                         //error handler

        public function __construct()           //Runs our connection whenever we call the database file 
        {
            $conn = 'mysql:host=' . $this->dbHost . ';dbname=' . $this->dbName;
            
            $options = array(
                PDO::ATTR_PERSISTENT => true,                                   //With this we are preventing the driver from crashing and giving it timeout when we are conneting to database. Also looks if there is a connection eslablished to the database
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION                     //Handling Error
            );

            try
            {
                $this->dbHandler = new PDO($conn, $this->dbUser, $this->dbPass, $options);
            }
            catch(PDOException $e)
            {
                $this->error = $e->getMessage();                                //Built-in function stores error message inside this->error in case of exception
                echo $this->error;
            }
        }

        //Method to write queries
        public function query($sql)
        {
            $this->statement = $this->dbHandler->prepare($sql);
        }

        //Method to bind values
        public function bind($parameter, $value, $type = null)                  //With this method we are basically binding the parameter with the value, and setting the $type which is the datatype to whatever it is in the database
        {
            
            //Checking for type of value
            switch(is_null($type))
            {
                case is_int($value):    $type = PDO::PARAM_INT;                 //Check if value is int, if true set type to integer
                break;
                case is_bool($value):   $type = PDO::PARAM_BOOL;                //Check if value is bool, if true set type to boolean
                break;
                case is_null($value):   $type = PDO::PARAM_NULL;                //Check if value is empty, if true set type to null
                break;
                default:                $type = PDO::PARAM_STR;
            }

            $this->statement->bindValue($parameter, $value, $type);             //Here we bind

        }


        //Method to execute the prepared statement
        public function execute(){
            return $this->statement->execute();
        }

        //Return an array of all the vaues in the database
        public function resultSet(){
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }

        //Return a specific row as an object, sprecifically, the next row from the database
        public function single(){
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }
    
        //Getting the total row count
        public function rowCount(){
            $this->execute();
            return $this->statement->rowCount();                                //This helps find a specific row in the db in order to change/update it by a query
        
        }
    
    }