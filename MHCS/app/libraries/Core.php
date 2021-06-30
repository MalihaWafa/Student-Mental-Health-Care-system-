<?php
//By G A Rubayat Hyder
//A17CS5335

//Core class
class Core
{
        protected $currentController = 'Pages';                                         //If there are no other controller in our controller class, this page will be automatically loaded
        protected $currentMethod = 'index';                                             //Inside the Pages controller above, it will the index method
        protected $params = [];                                                         //currentController & currentMethod will change if the URL changes, so we are creating a method to fetch the URL

        public function __construct()                                                   //Constructor Function
        {                                                  
            // print_r($this->getURL());                                                //Test Function: We use print_r since we don't want to echo out the function
            
            $url = $this->getURL();



            //FIRSTLY A CHECK FOR CONTROLLER
                                                                                        //Look in controller for first value, double dot used since we will be requiring Core.php in require.php, ucwords capitalize first letter
            if(@file_exists('../app/controllers/' . ucwords($url[0]) . '.php'))          //Look inside the controller in the controllers folder for the first value.  File checks in app/controllers/ for value provided in $url[0].php            {
            {
                $this->currentController = ucwords($url[0]);                            //set the controller to current controller, by overriding initialized value of Pages a
                unset($url[0]);
            }

            //Requiring the controller, basically calling the page
            require '../app/controllers/' . $this->currentController . '.php';
            $this->currentController = new $this->currentController;                    //Instantiating it

            
            
            //SECONDLY WE CHECK FOR THE METHOD, IN PRETTY MUCH THE SAME WAY
            
            if(isset($url[1]))
            {
                if(method_exists($this->currentController, $url[1]))
                {
                    $this->currentMethod = $url[1];
                    unset($url[1]);
                }
            }

            //Get Parameters
            $this->params = $url ? array_values($url) : [];                             //if there are parameters available in the url, add them to the params array, otherwise keep it empty 
        
            //Callback with array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
        
        }



        public function getURL()
        {
            if(isset($_GET['url']))                                                     //Check if super global get is set
            {
                $url = rtrim($_GET['url'], '/');                                        //If it is set, trim/remove the last forward slash of the url

                $url = filter_var($url, FILTER_SANITIZE_URL);                           //Filter url variable as a string/number, otherwise known as a variable

                $url = explode('/', $url);                                              //Break the URL into array starting from the forward slash

                return $url;                                                            //Finally return the url, NOTE that the url is now set to an array
            }
        }
}