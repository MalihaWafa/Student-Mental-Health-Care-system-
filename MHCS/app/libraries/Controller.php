<?php
//By G A Rubayat Hyder
//A17CS5335

    //Load the model and the view. These are basic methods in a class that execute the command given by the subclass
    class Controller
    {
    
        public function model($model)                                               //Load model File. Looks for files inside the model folder
        {
            //Require model file
            require_once '../app/models/' . $model . '.php';
            //Instantiate model
            return new $model();
        }

        
        public function view($view, $data = [])                                     //Load view file. Looks for files inside the views folder, Empty array is dynamic data from the database that will be passed into the view
        {
            if(file_exists('../app/views/' . $view . '.php'))                        //If file exists, it is loaded
            {
                require_once '../app/views/' . $view . '.php';
            }
            else                                                                    //else it dies
            {
                die("View does not exist.");
            }
        
        }
    
    
    
    }