<?php
//By G A Rubayat Hyder
//A17CS5335

    //Database params for the database connection
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'mhcs');

    //APPROOT (Dynamically finds the app file location. This is done for when the system is transfered to a server, cause we won't know the file directory of the app file)
    define('APPROOT', dirname(dirname(__FILE__)));

    //URLROOT (For making dynamic roots in the system)
    define('URLROOT', 'http://localhost/MHCS');

    //SITENAME
    define('SITENAME', 'MHCS');